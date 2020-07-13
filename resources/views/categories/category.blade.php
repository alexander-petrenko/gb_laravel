<div class="col mb-4">
    <div class="card">
        <img src="{{ $category->url }}" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">{{ $category->name }}</h5>
            <p class="card-text">{{ $category->description }}</p>
        </div>
        <a href="{{ route('singleCategory', $category->id) }}" class="btn btn-primary">Go -></a>
    </div>
</div>