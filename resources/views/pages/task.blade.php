<x-layouts.app title="Task Page">
    <div class="card">
        <div class="card-body">
        <!-- Tasks Table -->
        <div class="shadow-sm card">
            <div class="card-body">
                <h5 class="mb-3 card-title fw-semibold">Tasks</h5>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Task Name</th>
                                <th>Assigned To</th>
                                <th>Priority</th>
                                <th>Due Date</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Create Wireframes</td>
                                <td>John Doe</td>
                                <td><span class="badge bg-danger">High</span></td>
                                <td>2024-11-20</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary">Delete</a>
                                </td>
                            </tr>
                            <!-- Add other tasks similarly -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</x-layouts.app>
