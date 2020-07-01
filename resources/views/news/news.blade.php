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
            News page
        </h1>

        <div class="news">
            @forelse($news as $news_item)
                @include('news.news_item')
            @empty
                <p>No news</p>
            @endforelse
        </div>
    </div>
@endsection