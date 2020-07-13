<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function newsEdit(News $news)
    {
        if (!$news) {
            return abort(404);
        }

        return view('news.news_edit', [
            'news' => $news
        ]);
    }

    public function newsUpdate(NewsCreateRequest $request, News $news)
    {
        if ($request->isMethod('post')) {
            
            $news->fill($request->validated());
            $news->save();

            return redirect()->route('newsUpdate', $news);
        }

        return view('news.news_create', [
            'news' => $news,
            'title' => 'News update',
            'route' => route('newsUpdate', $news)
        ]);
    }

    public function newsCreate()
    {
        return view('news.news_create', [
            'title' => 'News Create',
            'route' => route('newsAdd')
        ]);
    }
    public function newsAdd(NewsCreateRequest $request)
    {   
        $news = new News();

        if ($request->isMethod('post')) {
            
            $data = $request->validated();
            $news = News::create($data);

            if ($news) {
                return redirect()->route('newsCreate');
            }

        }

        return view('news.news_create', [
            'news' => $news,
            'title' => 'News create',
            'route' => route('newsCreate')
        ]);
    }

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

    

    public function aboutUs()
    {
        return view('about_us');
    }
}