<x-layouts.app title="Project Management">
    <div class="container">
        <h1>Project Management</h1>

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
                    <th>Project Name</th>
                    <th>Client</th>
                    <th>Status</th>
                    <th>Deadline</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->client->company_name ?? 'N/A' }}</td>
                        <td><span class="badge bg-{{ $project->status == 'Active' ? 'success' : 'secondary' }}">{{ $project->status }}</span></td>
                        <td>{{ $project->deadline }}</td>
                        <td>
                            <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No projects found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        {{-- {{ $projects->links() }} --}}

        <!-- Create Project -->
        <a href="{{ route('projects.create') }}" class="btn btn-primary">Create Project</a>
    </div>
</x-layouts.app>
