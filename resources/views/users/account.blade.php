@extends('layouts.app')

@section('title')
    @parent Account
@endsection

@section('account_active')
    active
@endsection

@section('content')    
    <div class="content">
        <h1>
            Account
        </h1>

        @if(session()->has('error'))
            <h3>{{ session()->get('error') }}</h3>
        @endif

        <div class="account">
            <p>Welcome, {{ $name }}</p>
        </div>
    </div>
@endsection