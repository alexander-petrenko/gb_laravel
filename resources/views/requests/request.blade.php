<div class="request card w-100">
    <div class="card-body">
        <h3 class="card-title">Request {{ $request->id }}</h3>
        <h5>Name:</h5>
        <p class="card-text">{{ $request->name }}</p>
        <h5>Phone:</h5>
        <p class="card-text">{{ $request->phone }}</p>
        <h5>Email:</h5>
        <p class="card-text">{{ $request->email }}</p>
        <h5>Request subject:</h5>
        <p class="card-text">{{ $request->text }}</p>
        <h5>Time:</h5>
        <p>{{ $request->created_at }}</p>
    </div>
    <div class="admin_options">
        <div>
            <a href="{{ route('requests.edit', $request) }}" class="btn btn-secondary">Edit</a>
        </div>
        <div>
            <form action="{{ route('requests.destroy', $request) }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-secondary">Delete</button>
            </form>
        </div>
    </div>
</div>