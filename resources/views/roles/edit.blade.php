<form method="POST" action="{{ route('roles.update', $role->id) }}">
    @csrf
    @method('PUT')
    <label for="role_name">Role Name:</label>
    <input id="role_name" name="role_name" type="text" required value="{{ $role->role_name }}">
    <label for="description">Description:</label>
    <textarea id="description" name="description">{{ $role->description }}</textarea>
    <button type="submit">Save</button>
    <a href="{{ route('roles.index') }}">Back to Roles</a>
</form>
