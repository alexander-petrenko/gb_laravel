@extends('layouts.app')

@section('title')
    @parent Requests
@endsection

@section('requests_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>
            Requests
        </h1>

        <div class="requests">
            @forelse($requests as $request)
                @include('requests_item')
            @empty
                <p>No requests</p>
            @endforelse
        </div>
    </div>
@endsection