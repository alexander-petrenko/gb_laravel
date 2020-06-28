<div class="news_item" style="width: 300px; margin-top: 35px; margin-bottom: 25px;">
    <h2>{{ $news_item['title'] }}</h2>
    <p>Content: {{ $news_item['content'] }}</p>
    <p>Category: {{ $news_item['category'] }}</p>
    <p>
        <a href="/news/{{ $news_item['id'] }}">Подробнее -></a>
    </p>
</div>