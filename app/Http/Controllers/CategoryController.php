<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categories = [

        [
            'id' => 1,
            'name' => 'Category 1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi!',
            'url' => '/img/category1.jpeg'
        ],
        [
            'id' => 2,
            'name' => 'Category 2',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi!',
            'url' => '/img/category4.jpg'
        ],
        [
            'id' => 3,
            'name' => 'Category 3',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi!',
            'url' => '/img/category2.jpg'
        ],
        [
            'id' => 4,
            'name' => 'Category 4',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi!',
            'url' => '/img/category3.jpg'
        ],
        [
            'id' => 5,
            'name' => 'Category 5',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi!',
            'url' => '/img/category5.jpg'
        ],
    ];

    public function index()
    {
        return view('categories.categories', [
            'categories' => $this->categories
        ]);
    }

}
