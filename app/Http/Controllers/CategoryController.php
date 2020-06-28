<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categories = [

        [
            'id' => 1,
            'name' => 'category 1',
            'description' => 'Short description of category 1'
        ],
        [
            'id' => 2,
            'name' => 'category 2',
            'description' => 'Short description of category 2'
        ],
        [
            'id' => 3,
            'name' => 'category 3',
            'description' => 'Short description of category 3'
        ],
        [
            'id' => 4,
            'name' => 'category 4',
            'description' => 'Short description of category 4'
        ],
        [
            'id' => 5,
            'name' => 'category 5',
            'description' => 'Short description of category 5'
        ],
    ];

    public function index()
    {
        return view('categories', [
            'categories' => $this->categories
        ]);
    }

}
