<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        return view('categories.categories', [
            'categories' => $categories
        ]);
    }

    public function newsByCategory(Category $category)
    {
        return view('categories.news_by_category', [
            'category' => $category
        ]);
    }

}
