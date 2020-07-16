<div class="news_item card w-100">
    <div class="card-body">
        <h3 class="card-title">{{ $news_item->title }}</h3>
        <p class="card-text">{{ $news_item->description }}</p>
        <p>Category: 
          @foreach($news_item->categories as $news_item_category)
            <a href="{{ route('categories.show', $news_item_category->id) }}">{{ $news_item_category->name }}</a>, 
          @endforeach
        </p>
        <div class="news_info">
          <a href="{{ route('news.show', $news_item->id) }}" class="btn btn-primary">Read the full story</a>
          <span class="created_at">Added: {{ $news_item->created_at }}</span>
        </div>
        <div class="admin_options">
            <div>
                <a href="{{ route('news.edit', $news_item) }}" class="btn btn-secondary">Edit</a>
            </div>
            <div>
              <form action="{{ route('news.destroy', $news_item) }}" method="post">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-secondary">Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>