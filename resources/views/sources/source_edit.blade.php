@extends('layouts.app')

@section('title')
    @parent Source edit
@endsection

@section('source_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>Edit the source No. {{ $source->id }}</h1>
        <form method="post" action="{{ route('source.update', $source) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Link</label>
                <input type="text" name="link" value="{{ $source->link }}" class="form-control" id="exampleFormControlInput1">
                @include('validation_error', ['attribute' => 'link'])
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <span class="alert-success">{{ $message ?? NULL }}</span>
        </form>
    </div>
@endsection