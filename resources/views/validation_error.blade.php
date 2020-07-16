@if($errors->has($attribute))
    <div class="​alert alert-danger​">
        @foreach($errors->get($attribute) as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif