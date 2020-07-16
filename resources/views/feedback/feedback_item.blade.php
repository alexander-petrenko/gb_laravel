<div class="feedback_item card w-100">
    <div class="card-body">
      <h3 class="card-title">{{ $feedback_item->name }}:</h3>
      <p class="card-text">{{ $feedback_item->message }}</p>
      <p>{{ $feedback_item->created_at }}</p>
    </div>
    <div class="admin_options">
        <div>
            <a href="{{ route('feedback.edit', $feedback_item) }}" class="btn btn-secondary">Edit</a>
        </div>
        <div>
          <form action="{{ route('feedback.destroy', $feedback_item) }}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-secondary">Delete</button>
          </form>
        </div>
    </div>
</div>