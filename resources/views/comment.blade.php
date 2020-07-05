@extends('layouts.app')

@section('title')
    @parent Comment
@endsection

@section('comment_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>Rate us</h1>
        <form method="post" action="/user/comment">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Comment</label>
                <textarea class="form-control" name="comment" value="{{ old('comment') }}" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Leave the comment</button>
            <span>{{ $message ?? NULL }}</span>
        </form>
    </div>
@endsection