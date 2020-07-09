<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function newsEdit(int $id)
    {
        $news = (new News())->getSingleNews($id);

        if (!$news) {
            return abort(404);
        }

        return view('news.news_edit', [
            'news' => $news[0]
        ]);
    }

    public function newsUpdate(int $id)
    {
        $title = request()->input('title') ?? '';
        $content = request()->input('content') ?? '';
        $category = request()->input('category') ?? '';

        if ($title && $content && $category) {
            $this->news[$id - 1]['title'] = $title;
            $this->news[$id - 1]['content'] = $content;
            $this->news[$id - 1]['category'] = $category;

            $message = 'Updated successfully!';
        } else {
            $message = 'No empty fields required';
        }

        return view('news.news_edit', [
            'news' => $this->news[$id - 1],
            'message' => $message
        ]);
    }

    public function newsCreate()
    {
        return view('news.news_create');
    }
    public function newsAdd(NewsCreateRequest $request)
    {
        $data = $request->validated();

        $title = $data['title'];
        $description = $data['description'];
        $short_description = $data['short_description'];
        
        $str = $title . ',' . $description . ',' . $short_description . PHP_EOL;

        if (file_put_contents(storage_path('app/public/news.txt'), $str, FILE_APPEND)) {
            $message = 'News has been added successfully!';
        } else {
            $message = 'Error';
        }

        return view('news.news_create', [
            'message' => $message
        ]);
    }

    public function news()
    {
        $news = (new News())->getNews();

        return view('news.news', [
            'news' => $news
        ]);
    }

    public function singleNews(int $id)
    {
        $news = (new News())->getSingleNews($id);

        return view('news.single_news', [
            'single_news' => $news[0]
        ]);
    }

    public function newsByCategory(int $category_id)
    {
        $news = (new News())->getNewsByCategory($category_id);

        return view('news.news', [
            'news' => $news
        ]);
    }

    public function aboutUs()
    {
        return view('about_us');
    }
}