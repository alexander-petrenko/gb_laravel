<div class="news_item card w-100">
    <div class="card-body">
      <h3 class="card-title">{{ $news_item->title }}</h3>
      <p class="card-text">{{ $news_item->description }}</p>
      <p>Category: 
        <a href="{{ route('singleCategory', $category->id) }}">{{ $category->name }}</a>
      </p>
      <div class="news_info">
        <a href="{{ route('singleNews', $news_item->id) }}" class="btn btn-primary">Read the full story</a>
        <span class="created_at">Added: {{ $news_item->created_at }}</span>
      </div>
    </div>
</div>