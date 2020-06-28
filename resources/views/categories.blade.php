<div class="content">
    <h1>
        Categories
    </h1>

    <div class="categories">
        @foreach($categories as $category)
            @include('category')
        @endforeach
    </div>
</div>