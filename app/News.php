<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table = 'news';

    
    public function getNews()
    {
        return DB::table('news_category')
            ->join('categories', 'categories.id', '=', 'news_category.category_id')
            ->join('news', 'news_category.news_id', '=', 'news.id')
            ->select('news_category.news_id', 'news.title', 'news.description', 'news.created_at', 'news_category.category_id', 'categories.name')
            ->orderBy('news_category.news_id')
            ->get();
    }

    public function getSingleNews(int $id)
    {
        return DB::table('news')
            ->join('news_category', 'news.id', '=', 'news_category.news_id')
            ->where('news.id', '=', $id)
            ->join('categories', 'news_category.category_id', '=', 'categories.id')
            ->select('news_category.news_id', 'news.title', 'news.description', 'news.created_at', 'news.updated_at', 'news_category.category_id', 'categories.name')
            ->get();
    }

    public function getNewsByCategory(int $category_id)
    {
        return DB::table('categories')
            ->join('news_category', 'categories.id', '=', 'news_category.category_id')
            ->where('categories.id', '=', $category_id)
            ->join('news', 'news.id', '=', 'news_category.news_id')
            ->select('news_category.news_id', 'news.title', 'news.description', 'news.created_at', 'news_category.category_id', 'categories.name')
            ->get();
    }

    /* public function newsEdit(int $id)
    {
        return DB::table('news')
            ->
    } */
}
