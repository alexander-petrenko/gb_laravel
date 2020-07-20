@extends('layouts.app')

@section('title')
    @parent Admin
@endsection

@section('account_active')
    active
@endsection

@section('content')    
    <div class="content">
        <h1>
            Admin
        </h1>

        <div class="account">
            <p>Welcome, {{ $name }}</p>
        </div>
    </div>
@endsection