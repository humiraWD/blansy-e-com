<h1>Edit User</h1>
<form action="{{ route('admin.users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $user->name }}" required>
    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $user->email }}" required>
    <label for="role">Role:</label>
    <select name="role" required>
        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
        <option value="affiliate" {{ $user->role == 'affiliate' ? 'selected' : '' }}>Affiliate</option>
    </select>
    <button type="submit">Update User</button>
</form>
