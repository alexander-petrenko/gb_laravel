<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    protected $news = [
        
        [
            'id' => 1,
            'title' => 'News 1',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 1
        ],
        [
            'id' => 2,
            'title' => 'News 2',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 1
        ],
        [
            'id' => 3,
            'title' => 'News 3',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 1
        ],
        [
            'id' => 4,
            'title' => 'News 4',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 1
        ],
        [
            'id' => 5,
            'title' => 'News 5',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 2
        ],
        [
            'id' => 6,
            'title' => 'News 6',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 2
        ],
        [
            'id' => 7,
            'title' => 'News 7',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 2
        ],
        [
            'id' => 8,
            'title' => 'News 8',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 2
        ],
        [
            'id' => 9,
            'title' => 'News 9',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 3
        ],
        [
            'id' => 10,
            'title' => 'News 10',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 3
        ],
        [
            'id' => 11,
            'title' => 'News 11',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 3
        ],
        [
            'id' => 12,
            'title' => 'News 12',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 3
        ],
        [
            'id' => 13,
            'title' => 'News 13',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 4
        ],
        [
            'id' => 14,
            'title' => 'News 14',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 4
        ],
        [
            'id' => 15,
            'title' => 'News 15',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 4
        ],
        [
            'id' => 16,
            'title' => 'News 16',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 4
        ],
        [
            'id' => 17,
            'title' => 'News 17',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 5
        ],
        [
            'id' => 18,
            'title' => 'News 18',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 5
        ],
        [
            'id' => 19,
            'title' => 'News 19',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 5
        ],
        [
            'id' => 20,
            'title' => 'News 20',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel non dignissimos distinctio repellendus, aliquid similique provident voluptatibus beatae excepturi! Esse tenetur enim quam voluptate repudiandae quis debitis quod, amet sed ab nam fugiat possimus asperiores assumenda et cupiditate magni, eligendi quibusdam. Aliquid, voluptatum quos enim quam ratione iure esse voluptatem maiores dolorem porro expedita perspiciatis laboriosam est dolor cumque aut veniam eos aperiam sed totam! Eaque unde, repellendus neque beatae adipisci vero molestias? Qui, reiciendis ad nemo rem, sunt tempore quis ipsam soluta veritatis odio ut debitis est reprehenderit beatae praesentium atque repellendus eos, vel ex. Minus, aperiam pariatur.',
            'category' => 5
        ],
    ];

    public function index()
    {
        return view('welcome');
    }

    public function newsEdit(int $id)
    {
        return view('news.news_edit', [
            'id' => $id
        ]);
    }

    public function newsCreate()
    {
        return view('news.news_create');
    }

    public function news()
    {
        return view('news.news', [
            'news' => $this->news
        ]);
    }

    public function singleNews(int $id)
    {
        return view('news.single_news', [
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

        return view('news.news', [
            'news' => $news
        ]);
    }

    public function aboutUs()
    {
        return view('about_us');
    }
}