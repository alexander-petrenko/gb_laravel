@extends('layouts.app')

@section('title')
    @parent {{ $single_news->title }}
@endsection

@section('content')
    <div class="single_news">
        <h1>{{ $single_news->title }}</h1>
        <p>{{ $single_news->description }}</p>
        <p>Category: 
            @forelse($single_news->categories as $category)
                <a href="{{ route('singleCategory', $category->id) }}">{{ $category->name }}</a>, 
            @empty
                <p>No news</p>
            @endforelse
        </p>
        <div>
            <div>Added: {{ $single_news->created_at }}</div>
            <div>Updated: {{ $single_news->updated_at }}</div>
        </div>
        <div>
            <a href="{{ route('newsEdit', $single_news->id) }}">Edit</a>
        </div>
    </div>
@endsection