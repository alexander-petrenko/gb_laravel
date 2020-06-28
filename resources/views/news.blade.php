<div class="content">
    <h1>
        News page
    </h1>

    <div class="news">
        @foreach($news as $news_item)
            @include('news_item')
        @endforeach
    </div>
</div>