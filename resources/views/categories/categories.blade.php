@extends('layouts.app')

@section('title')
    @parent Categories
@endsection

@section('categories_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>
            Categories
        </h1>

        <span class="alert-success">{{ $message ?? NULL }}</span>

        <div class="categories row row-cols-1 row-cols-md-2">
            @foreach($categories as $category)
                @include('categories.category')
            @endforeach
        </div>
    </div>
@endsection    