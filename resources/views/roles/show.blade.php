<div>
    <label for="role_name">Role Name:</label>
    <input type="text" name="role_name" disabled value="{{ $role->role_name }}" />
    <br>
    <label for="description">Description:</label>
    <textarea name="description" disabled>{{ $role->description }}</textarea>
    <br>
    <a href="{{ route('roles.index') }}">Back to Roles</a>
</div>
