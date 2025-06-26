<div>
    <a href="{{ route('roles.create') }}" class="btn btn-primary mb-3">Create Role</a>
    <br/>
    <table>
        <thead>
            <tr>
                <th>Role Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{ $role->role_name }}</td>
                <td>
                    <a href="{{ route('roles.show', $role->id) }}">View</a>
                    <a href="{{ route('roles.edit', $role->id) }}">Edit</a>
                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this role?');">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
