<?php

namespace App\Services;
use App\Models\News;
use App\Events\NewsParsedEvent;
use Orchestra\Parser\Xml\Facade as XmlParser;

class XmlParserService
{
    public function parsing(string $link)
    {
        $xml = XmlParser::load($link);
        $data = $xml->parse([
            'news' => [
                'uses' => 'channel.item[title,description]'
            ]
        ]);

        return $data;
    }

    public function saveNews(string $link)
    {
        $xml = $this->parsing($link);
        $news = $xml['news'];

        foreach ($news as $news_item) {
            News::create($news_item);
        }

        return true;
    }
}