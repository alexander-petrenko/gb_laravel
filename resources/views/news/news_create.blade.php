@extends('layouts.app')

@section('title')
    @parent Create
@endsection

@section('create_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>Create news</h1>
        <form method="post" action="/news/create">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" value="{{ old('description') }}" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea2">Short description</label>
                <textarea class="form-control" name="short_description" value="{{ old('short_description') }}" id="exampleFormControlTextarea2" rows="2"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <span>{{ $message ?? NULL }}</span>
        </form>
    </div>
@endsection