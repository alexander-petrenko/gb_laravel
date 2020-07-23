@extends('layouts.app')

@section('title')
    @parent User edit
@endsection

@section('users_active')
    active
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit user {{ $user->id }}:</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.update', $user) }}">
                        @method('PUT')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="is_admin">Category</label>
                            <div id="is_admin" class="is_admin">
                                <p>
                                    <input type="radio" name="is_admin" value="0" @if($user->is_admin === false) checked @endif> Simple user
                                    <input type="radio" name="is_admin" value="1" @if($user->is_admin === true) checked @endif> Admin
                                </p>
                            </div>
                            @include('validation_error', ['attribute' => 'is_admin'])
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <span class="alert alert-success">{{ $message ?? NULL }}</span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection