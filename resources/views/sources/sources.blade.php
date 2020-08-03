@extends('layouts.app')

@section('title')
    @parent Sources
@endsection

@section('sources_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>
            Sources
        </h1>

        <span class="alert-success">{{ $message ?? NULL }}</span>
        
        <div class="sources">
            @forelse($sources as $source)
                @include('sources.source')
            @empty
                <p>No sources</p>
            @endforelse
        </div>
    </div>
@endsection