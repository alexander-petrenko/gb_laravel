@extends('layouts.app')

@section('title')
    @parent Edit
@endsection

@section('content')
    <div class="content">
        <h1>Update category {{ $category->name }}</h1>
        <form method="post" action="{{ route('categories.update', $category) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="exampleFormControlInput1">
                @include('validation_error', ['attribute' => 'name'])
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $category->description }}</textarea>
                @include('validation_error', ['attribute' => 'description'])
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Url</label>
                <input type="text" name="url" value="{{ $category->url }}" class="form-control" id="exampleFormControlInput2">
                @include('validation_error', ['attribute' => 'url'])
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <span class="alert alert-success">{{ $message ?? NULL }}</span>
        </form>
    </div>
@endsection