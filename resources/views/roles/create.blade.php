 <form method="POST" action="{{ route('roles.store') }}">
    @csrf
    <label for ="role_name">Role Name:</label>
    <input id="role_name" name="role_name" type="text" required>
    <label for ="description">Description:</label>
    <textarea id="description" name="description">
    </textarea>
    <button type="submit">Save</button>
    <a href="{{ route('roles.index') }}">Back to Roles</a>
</form>
