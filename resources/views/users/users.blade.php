@extends('layouts.app')

@section('title')
    @parent Users
@endsection

@section('users_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>
            Users
        </h1>

        <span class="alert-success">{{ $message ?? NULL }}</span>
        
        <div class="users">
            @forelse($users as $user)
                @include('users.user')
            @empty
                <p>No users</p>
            @endforelse
        </div>
    </div>
@endsection