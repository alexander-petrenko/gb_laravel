<?php

namespace App\Listeners;

use App\Events\NewsParsedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\News;

class NewsParsedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        foreach ($event->parsed_news as $news_item) {
            News::create($news_item);
        }
    }
}
