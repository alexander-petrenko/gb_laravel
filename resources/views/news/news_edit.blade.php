@extends('layouts.app')

@section('title')
    @parent Edit
@endsection

@section('content')
    <div class="content">
        <h1>News edit</h1>
        <div>News № {{ $id }}</div>
    </div>
@endsection