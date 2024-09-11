<h1>Create User</h1>
<form action="{{ route('admin.users.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="password_confirmation" required>
    <label for="role">Role:</label>
    <select name="role" required>
        <option value="user">User</option>
        <option value="admin">Admin</option>
        <option value="affiliate">Affiliate</option>
    </select>
    <button type="submit">Create User</button>
</form>
