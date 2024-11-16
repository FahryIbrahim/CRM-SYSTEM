<x-layouts.app title="Client Page">
    <div class="card">
        <div class="card-body">
            <div class="mb-4 shadow-sm card">
                <div class="card-body">
                    <h5 class="mb-3 card-title fw-semibold">Clients</h5>
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Company</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>
                                        <a href="mailto:johndoe@example.com" class="text-reset">johndoe@example.com</a>
                                    </td>
                                    <td>+1 (555) 123-4567</td>
                                    <td>Acme Corp</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                        <a href="#" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    </td>
                                </tr>
                                <!-- Add other clients similarly -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
