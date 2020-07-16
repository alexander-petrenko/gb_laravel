<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    
    public function news()
    {
        $news = News::query()->paginate(10);

        return view('news.news', [
            'news' => $news
        ]);
    }

    public function singleNews(News $news)
    {
        return view('news.single_news', [
            'single_news' => $news
        ]);
    }

    
}