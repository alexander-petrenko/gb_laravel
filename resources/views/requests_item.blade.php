<div class="requests_item card w-100">
    <div class="card-body">
        <h3 class="card-title">Request {{ $request['id'] }}</h3>
        <h5>Name:</h5>
        <p class="card-text">{{ $request['name'] }}</p>
        <h5>Phone:</h5>
        <p class="card-text">{{ $request['phone'] }}</p>
        <h5>Email:</h5>
        <p class="card-text">{{ $request['email'] }}</p>
        <h5>Request subject:</h5>
        <p class="card-text">{{ $request['request'] }}</p>
        <h5>Time:</h5>
        <p>{{ $request['time'] }}</p>
    </div>
</div>