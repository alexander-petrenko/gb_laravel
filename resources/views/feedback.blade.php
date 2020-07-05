@extends('layouts.app')

@section('title')
    @parent Feedback
@endsection

@section('feedback_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>
            Feedback
        </h1>

        <div class="feedback">
            @forelse($comments as $comment)
                @include('feedback_item')
            @empty
                <p>No feedback</p>
            @endforelse
        </div>
    </div>
@endsection