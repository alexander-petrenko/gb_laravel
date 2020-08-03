<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\XmlParserService;
use Illuminate\Http\Request;
use App\Events\NewsParsedEvent;
use App\Jobs\NewsParsing;
use App\Providers\AppServiceProvider;
use App\Models\News;
use App\Models\Source;


class ParserController extends Controller
{
    public function index()
    {
        $links = Source::all();

        foreach ($links as $link) {
            NewsParsing::dispatch($link->link);
        }

        return redirect()->route('news.index')->with('message', 'Parsing complete');
    }
}
