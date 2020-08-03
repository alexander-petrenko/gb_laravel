<div class="col mb-4">
    <div class="card">
        <img src="{{ $category->url }}" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">{{ $category->name }}</h5>
            <p class="card-text">{{ $category->description }}</p>
        </div>
        <a href="{{ route('categories.show', $category) }}" class="btn btn-primary">Go -></a>
        <div class="admin_options" role="group" aria-label="Basic example">
            <div>
                <a href="{{ route('categories.edit', $category) }}" class="btn btn-secondary">Edit</a>
            </div>
            <div>
                <form action="{{ route('categories.destroy', $category) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-secondary">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>