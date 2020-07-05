<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
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
        $news = $this->news[$id - 1] ?? [];
        if (!$news) {
            return abort(404);
        }

        return view('news.news_edit', [
            'news' => $news
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
        $request->validated();

        $title = request()->input('title');
        $description = request()->input('description');
        $short_description = request()->input('short_description');
        
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