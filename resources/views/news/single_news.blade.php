@extends('layouts.app')

@section('title')
    @parent {{ $single_news['title'] }}
@endsection

@section('content')
    <div class="single_news">
        <h1>{{ $single_news['title'] }}</h1>
        <p>{{ $single_news['content'] }}</p>
        <p>Category: {{ $single_news['category'] }}</p>
        <div>
            <a href="/news/{{$single_news['id']}}/edit">Edit</a>
        </div>
    </div>
@endsection