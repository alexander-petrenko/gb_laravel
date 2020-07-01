<div class="news_item card w-100">
    <div class="card-body">
      <h3 class="card-title">{{ $news_item['title'] }}</h3>
      <p class="card-text">{{ $news_item['content'] }}</p>
      <p>Category: {{ $news_item['category'] }}</p>
      <a href="/news/{{ $news_item['id'] }}" class="btn btn-primary">Read the full story</a>
    </div>
</div>