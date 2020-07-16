@extends('layouts.app')

@section('title')
    @parent Edit
@endsection

@section('content')
    <div class="content">
        <h1>Update news No. {{ $news->id }}</h1>
        <form method="post" action="{{ route('news.update', $news) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" name="title" value="{{ $news->title }}" class="form-control" id="exampleFormControlInput1">
                @include('validation_error', ['attribute' => 'title'])
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $news->description }}</textarea>
                @include('validation_error', ['attribute' => 'description'])
            </div>
            <div class="form-group">
                <label for="categoryOption">Category</label>
                <div id="categoryOption" class="category_options">
                    @foreach($categories as $category)
                    <p>
                        <input type="checkbox" name="category[]" value="{{ $category->id }}" 
                            @php
                                foreach ($news->categories as $news_category) {
                                    if ($news_category->id == $category->id) {
                                        echo 'checked';
                                    }
                                }
                            @endphp
                        > {{ $category->name }}
                    </p>
                    @endforeach
                </div>
                @include('validation_error', ['attribute' => 'category'])
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <span class="alert alert-success">{{ $message ?? NULL }}</span>
        </form>
    </div>
@endsection