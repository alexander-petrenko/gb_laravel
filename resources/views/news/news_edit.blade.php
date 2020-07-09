@extends('layouts.app')

@section('title')
    @parent Edit
@endsection

@section('content')
    <div class="content">
        <h1>Update news No. {{ $news->news_id }}</h1>
        <form method="post" action="{{ route('newsUpdate', $news->news_id) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" name="title" value="{{ $news->title }}" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Content</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">{{ $news->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Category</label>
                <input type="text" name="category" value="{{ $news->name }}" class="form-control" id="exampleFormControlInput2">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <span>{{ $message ?? NULL }}</span>
        </form>
    </div>
@endsection