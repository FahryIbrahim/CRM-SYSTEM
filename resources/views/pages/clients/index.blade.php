<x-layouts.app title="Client Management">
    <div class="container">
        <h1>Client Management</h1>

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
                    <th>Company Name</th>
                    <th>VAT Number</th>
                    <th>Address</th>
                    <th>Contact Person</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($clients as $client)
                    <tr>
                        <td>{{ $client->company_name }}</td>
                        <td>{{ $client->vat_number }}</td>
                        <td>{{ $client->address }}</td>
                        <td>
                            {{ $client->user->name ?? 'N/A' }}<br>
                            <a href="mailto:{{ $client->user->email ?? '' }}" class="text-reset">
                                {{ $client->user->email ?? 'N/A' }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('clients.edit', $client) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <form action="{{ route('clients.destroy', $client) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No clients found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        {{-- {{ $clients->links() }} --}}

        <!-- Create Client -->
        <a href="{{ route('clients.create') }}" class="btn btn-primary">Create Client</a>
    </div>
</x-layouts.app>
