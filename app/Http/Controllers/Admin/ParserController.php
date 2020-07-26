<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\XmlParserService;
use Illuminate\Http\Request;
use App\Events\NewsParsedEvent;
use App\Providers\AppServiceProvider;
use App\Models\News;


class ParserController extends Controller
{
    public function index()
    {
        $objService = new XmlParserService();
        $xml = $objService->parse();
        $news = $xml['news'];

        /* foreach ($xml['news'] as $news_item) {
            if (!News::create($news_item)) {
                return redirect()->route('news.index')->with('message', 'Fail');
            }
        }*/

        /* $ev = new NewsParsedEvent($news);

        dd($ev->parsed_news); */

        event(new NewsParsedEvent($news));

        return redirect()->route('news.index')->with('message', 'Success');
    }
}
