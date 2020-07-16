@extends('layouts.app')

@section('title')
    @parent Feedback
@endsection

@section('feedback_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>Create a feedback</h1>
        <form method="post" action="{{ route('feedback.store') }}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="exampleFormControlInput1">
                @include('validation_error', ['attribute' => 'name'])
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" name="message" value="{{ old('message') }}" id="exampleFormControlTextarea1" rows="3"></textarea>
                @include('validation_error', ['attribute' => 'message'])
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <span class="alert-success">{{ $message ?? NULL }}</span>
        </form>
    </div>
@endsection