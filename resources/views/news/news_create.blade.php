@extends('layouts.app')

@section('title')
    @parent Create
@endsection

@section('create_active')
    active
@endsection

@section('content')
    <div class="content">
        <h1>Create news</h1>
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea2">Short description</label>
                <textarea class="form-control" id="exampleFormControlTextarea2" rows="2"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection