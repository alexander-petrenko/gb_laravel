@extends('layouts.app')

@section('title')
    @parent Request
@endsection

@section('request_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>Make a request:</h1>
        <form method="post" action="{{ route('requests.store') }}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="exampleFormControlInput1">
                @include('validation_error', ['attribute' => 'name'])
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Phone</label>
                <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control" id="exampleFormControlInput2">
                @include('validation_error', ['attribute' => 'phone'])
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleFormControlInput3">
                @include('validation_error', ['attribute' => 'email'])
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Request subject</label>
                <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="2">{{ old('text') }}</textarea>
                @include('validation_error', ['attribute' => 'text'])
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
            <span class="alert-success">{{ $message ?? NULL }}</span>
        </form>
    </div>
@endsection