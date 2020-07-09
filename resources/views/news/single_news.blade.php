@extends('layouts.app')

@section('title')
    @parent {{ $single_news->title }}
@endsection

@section('content')
    <div class="single_news">
        <h1>{{ $single_news->title }}</h1>
        <p>{{ $single_news->description }}</p>
        <p>Category: 
            <a href="{{ route('singleCategory', $single_news->category_id) }}">{{ $single_news->name }}</a>
        </p>
        <div>
            <div>Added: {{ $single_news->created_at }}</div>
            <div>Updated: {{ $single_news->updated_at }}</div>
        </div>
        <div>
            <a href="{{ route('newsEdit', $single_news->news_id) }}">Edit</a>
        </div>
    </div>
@endsection