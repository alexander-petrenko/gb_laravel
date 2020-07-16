@extends('layouts.app')

@section('title')
    @parent Feedback
@endsection

@section('feedback_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>Edit the feedback No. {{ $feedback->id }}</h1>
        <form method="post" action="{{ route('feedback.update', $feedback) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name="name" value="{{ $feedback->name }}" class="form-control" id="exampleFormControlInput1">
                @include('validation_error', ['attribute' => 'name'])
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3">{{ $feedback->message }}</textarea>
                @include('validation_error', ['attribute' => 'message'])
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <span class="alert-success">{{ $message ?? NULL }}</span>
        </form>
    </div>
@endsection