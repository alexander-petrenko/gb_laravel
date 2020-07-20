<div class="user card w-100">
    <div class="card-body">
      <h3 class="card-title">User {{ $user->id }}:</h3>
      <p>Name: {{ $user->name }}</p>
      <p>Email: {{ $user->email }}</p>
      <p>Email verified at: {{ $user->email_verified_at }}</p>
      <p>Registered at: {{ $user->created_at }}</p>
      <p>Updated at: {{ $user->updated_at }}</p>
      <p>Admin: {{ $user->is_admin }}</p>
    </div>
    <div class="admin_options">
        <div>
            <a href="{{ route('users.edit', $user) }}" class="btn btn-secondary">Edit</a>
        </div>
        <div>
          <form action="{{ route('users.destroy', $user) }}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-secondary">Delete</button>
          </form>
        </div>
    </div>
</div>