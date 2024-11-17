<x-layouts.app title="Task Management">
    <div class="container">
        <h1>Task Management</h1>

        <!-- Flash Messages -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>Task Name</th>
                    <th>Assigned To</th>
                    <th>Priority</th>
                    <th>Due Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->user->name ?? 'N/A' }}</td>
                        <td><span class="badge bg-{{ $task->priority == 'High' ? 'danger' : ($task->priority == 'Medium' ? 'warning' : 'secondary') }}">{{ $task->priority }}</span></td>
                        <td>{{ $task->due_date }}</td>
                        <td>
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No tasks found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        {{-- {{ $tasks->links() }} --}}

        <!-- Create Task -->
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>
    </div>
</x-layouts.app>
