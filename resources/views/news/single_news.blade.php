@extends('layouts.app')

@section('title')
    @parent {{ $single_news->title }}
@endsection

@section('content')
    <div class="single_news">
        <h1>{{ $single_news->title }}</h1>
        <p>{{ $single_news->description }}</p>
        <p>Category: 
            @foreach($single_news->categories as $category)
                <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>, 
            @endforeach
        </p>
        <div>
            <div>Added: {{ $single_news->created_at }}</div>
            <div>Updated: {{ $single_news->updated_at }}</div>
        </div>
        <div class="admin_options">
            <div>
                <a href="{{ route('news.edit', $single_news) }}" class="btn btn-secondary">Edit</a>
            </div>
            <div>
                <form action="{{ route('news.destroy', $single_news) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-secondary">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection