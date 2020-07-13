@extends('layouts.app')

@section('title')
    @parent Create
@endsection

@section('create_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>{{ $title }}</h1>
        <form method="post" action="{{ $route }}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" name="title" value="{{ $news->title }}" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $news->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Category</label>
                <input type="text" name="category" value="{{ $news->name }}" class="form-control" id="exampleFormControlInput2">
            </div>
            <button type="submit" class="btn btn-primary">
                @if $news->id Update @else Create @endif
            </button>
        </form>
    </div>
@endsection