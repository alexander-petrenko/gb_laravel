@extends('layouts.app')

@section('title')
    @parent News
@endsection

@section('news_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>
            News page - Category: {{ $category->name }}
        </h1>

        <div class="news">
            @forelse($category->news as $news_item)
                @include('categories.news_by_category_item')
            @empty
                <p>No news</p>
            @endforelse
        </div>
    </div>
@endsection