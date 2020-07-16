@extends('layouts.app')

@section('title')
    @parent Create
@endsection

@section('create_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>Create a new category</h1>
        <form method="post" action="{{ route('categories.store') }}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Category name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="exampleFormControlInput1">
                @include('validation_error', ['attribute' => 'name'])
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Category description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ old('description') }}</textarea>
                @include('validation_error', ['attribute' => 'description'])
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Category url</label>
                <input type="text" name="url" value="{{ old('url') }}" class="form-control" id="exampleFormControlInput2">
                @include('validation_error', ['attribute' => 'url'])
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <span class="alert-success">{{ $message ?? NULL }}</span>
        </form>
    </div>
@endsection