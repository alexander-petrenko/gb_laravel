@extends('layouts.app')

@section('title')
    @parent Source create
@endsection

@section('source_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>Create a news source</h1>
        <form method="post" action="{{ route('sources.store') }}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Link</label>
                <input type="text" name="link" value="{{ old('link') }}" class="form-control" id="exampleFormControlInput1">
                @include('validation_error', ['attribute' => 'link'])
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <span class="alert-success">{{ $message ?? NULL }}</span>
        </form>
    </div>
@endsection