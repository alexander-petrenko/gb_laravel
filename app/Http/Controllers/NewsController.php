<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    protected $news = [
        
        [
            'id' => 1,
            'title' => 'title news 1',
            'content' => 'content news 1',
            'category' => 1
        ],
        [
            'id' => 2,
            'title' => 'title news 2',
            'content' => 'content news 2',
            'category' => 1
        ],
        [
            'id' => 3,
            'title' => 'title news 3',
            'content' => 'content news 3',
            'category' => 1
        ],
        [
            'id' => 4,
            'title' => 'title news 4',
            'content' => 'content news 4',
            'category' => 1
        ],
        [
            'id' => 5,
            'title' => 'title news 5',
            'content' => 'content news 5',
            'category' => 2
        ],
        [
            'id' => 6,
            'title' => 'title news 6',
            'content' => 'content news 6',
            'category' => 2
        ],
        [
            'id' => 7,
            'title' => 'title news 7',
            'content' => 'content news 7',
            'category' => 2
        ],
        [
            'id' => 8,
            'title' => 'title news 8',
            'content' => 'content news 8',
            'category' => 2
        ],
        [
            'id' => 9,
            'title' => 'title news 9',
            'content' => 'content news 9',
            'category' => 3
        ],
        [
            'id' => 10,
            'title' => 'title news 10',
            'content' => 'content news 10',
            'category' => 3
        ],
        [
            'id' => 11,
            'title' => 'title news 11',
            'content' => 'content news 11',
            'category' => 3
        ],
        [
            'id' => 12,
            'title' => 'title news 12',
            'content' => 'content news 12',
            'category' => 3
        ],
        [
            'id' => 13,
            'title' => 'title news 13',
            'content' => 'content news 13',
            'category' => 4
        ],
        [
            'id' => 14,
            'title' => 'title news 14',
            'content' => 'content news 14',
            'category' => 4
        ],
        [
            'id' => 15,
            'title' => 'title news 15',
            'content' => 'content news 15',
            'category' => 4
        ],
        [
            'id' => 16,
            'title' => 'title news 16',
            'content' => 'content news 16',
            'category' => 4
        ],
        [
            'id' => 17,
            'title' => 'title news 17',
            'content' => 'content news 17',
            'category' => 5
        ],
        [
            'id' => 18,
            'title' => 'title news 18',
            'content' => 'content news 18',
            'category' => 5
        ],
        [
            'id' => 19,
            'title' => 'title news 19',
            'content' => 'content news 19',
            'category' => 5
        ],
        [
            'id' => 20,
            'title' => 'title news 20',
            'content' => 'content news 20',
            'category' => 5
        ],
    ];

    public function index()
    {
        return view('welcome');
    }

    public function newsEdit(int $id)
    {
        return view('news_edit', [
            'id' => $id
        ]);
    }

    public function newsCreate()
    {
        return view('news_create');
    }

    public function news()
    {
        return view('news', [
            'news' => $this->news
        ]);
    }

    public function singleNews(int $id)
    {
        return view('single_news', [
            'single_news' => $this->news[$id - 1]
        ]);
    }

    public function newsByCategory(int $category_id)
    {
        $news = [];
        foreach ($this->news as $news_item) {
            if ($news_item['category'] === $category_id) {
                $news[] = $news_item;
            }
        }

        return view('news', [
            'news' => $news
        ]);
    }

    public function aboutUs()
    {
        return view('about_us');
    }
}