<x-layouts.app title="Project Page">
    <div class="card">
        <div class="card-body">
            <!-- Projects Table -->
            <div class="mb-4 shadow-sm card">
                <div class="card-body">
                    <h5 class="mb-3 card-title fw-semibold">Projects</h5>
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Client</th>
                                    <th>Status</th>
                                    <th>Deadline</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Website Redesign</td>
                                    <td>Acme Corp</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>2024-12-01</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                    </td>
                                </tr>
                                <!-- Add other projects similarly -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
