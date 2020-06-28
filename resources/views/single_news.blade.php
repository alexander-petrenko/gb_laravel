<div class="single_news" style="width: 1000px; margin-top: 35px; margin-bottom: 25px;">
    <h1>News ID: {{ $single_news['id'] }}</h1>
    <h2>{{ $single_news['title'] }}</h2>
    <p>Content: {{ $single_news['content'] }}</p>
    <p>Category: {{ $single_news['category'] }}</p>
    <div>
        <a href="/news/{{$single_news['id']}}/edit">Edit</a>
    </div>
</div>