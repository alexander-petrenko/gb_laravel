<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = (new Category())->getCategories();

        return view('categories.categories', [
            'categories' => $categories
        ]);
    }

}
