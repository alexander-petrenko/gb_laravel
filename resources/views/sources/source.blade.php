<div class="source card w-100">
    <div class="card-body">
      <h3 class="card-title">Source No. {{ $source->id }}:</h3>
      <p class="card-text">{{ $source->link }}</p>
      <p>{{ $source->created_at }}</p>
    </div>
    <div class="admin_options">
        <div>
            <a href="{{ route('sources.edit', $source) }}" class="btn btn-secondary">Edit</a>
        </div>
        <div>
          <form action="{{ route('sources.destroy', $source) }}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-secondary">Delete</button>
          </form>
        </div>
    </div>
</div>