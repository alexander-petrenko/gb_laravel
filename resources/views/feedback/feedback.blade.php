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

        <span class="alert-success">{{ $message ?? NULL }}</span>
        
        <div class="feedback">
            @forelse($feedback as $feedback_item)
                @include('feedback.feedback_item')
            @empty
                <p>No feedback</p>
            @endforelse
        </div>
    </div>
@endsection