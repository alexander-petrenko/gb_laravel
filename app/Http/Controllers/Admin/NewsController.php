<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsCreateRequest;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = session()->get('message') ?? NULL;

        $news = News::query()->orderby('created_at', 'desc')->paginate(10);

        return view('news.news', [
            'news' => $news,
            'message' => $message
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $message = session()->get('message') ?? NULL;

        $categories = Category::all();

        return view('news.news_create', [
            'categories' => $categories,
            'message' => $message
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsCreateRequest $request)
    {
        $categories = $request->input('category');
        $news = News::create($request->only('title', 'description'));

        foreach ($categories as $category) {
            $news->categories()->attach($category);
        }

        $message = 'Success';

        return redirect()->route('news.create')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('news.single_news', [
            'single_news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $message = session()->get('message') ?? NULL;

        $categories = Category::all();

        return view('news.news_edit', [
            'news' => $news,
            'categories' => $categories,
            'message' => $message
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsCreateRequest $request, News $news)
    {
        $categories = $request->input('category');

        $news->categories()->detach();
        foreach ($categories as $category) {
            $news->categories()->attach($category);
        }

        $news->fill($request->only('title', 'description'));

        $message = $news->save() ? 'Success!' : 'Failed';

        return redirect()->route('news.edit', $news)->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->categories()->detach();

        $message = $news->delete() ? 'Success' : 'Failed';

        return redirect()->route('news.index')->with('message', $message);
    }
}
