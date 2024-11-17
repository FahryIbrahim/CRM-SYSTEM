<x-layouts.app title="Segawon CMS - Dashboard">
    <div class="row">
        <div class="col-lg-12 align-items-center">
            <div class="card">
                <div class="card-body">
                    <h2 class="page-title">
                        <strong>
                            Dashboard
                        </strong>
                    </h2>
                </div>
            </div>
            <div class="mt-5 row">
                <div class="col-lg-3 align-items-center">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4 card-title fw-semibold">
                                <span>
                                    <span class="p-2 text-white bg-primary rounded-circle d-inline-flex">
                                        <i class="ti ti-user"></i>
                                    </span>
                                    <strong class="ms-2">
                                        Users
                                    </strong>
                                </span>
                            </h5>
                            <h3 class="mb-0">
                                <strong>{{ $totalUsers }}</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 align-items-center">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4 card-title fw-semibold">
                                <span>
                                    <span class="p-2 text-white bg-primary rounded-circle d-inline-flex">
                                        <i class="ti ti-building"></i>
                                    </span>
                                    <strong class="ms-2">
                                        Clients
                                    </strong>
                                </span>
                            </h5>
                            <h3 class="mb-0">
                                <strong>{{ $totalClients }}</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 align-items-center">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4 card-title fw-semibold">
                                <span>
                                    <span class="p-2 text-white bg-primary rounded-circle d-inline-flex">
                                        <i class="ti ti-clipboard-list"></i>
                                    </span>
                                    <strong class="ms-2">
                                        Projects
                                    </strong>
                                </span>
                            </h5>
                            <h3 class="mb-0">
                                <strong>{{ $totalProjects }}</strong>
                            </h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 align-items-center">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4 card-title fw-semibold">
                                <span>
                                    <span class="p-2 text-white bg-primary rounded-circle d-inline-flex">
                                        <i class="ti ti-file"></i>
                                    </span>
                                    <strong class="ms-2">
                                        Tasks
                                    </strong>
                                </span>
                            </h5>
                            <h3 class="mb-0">
                                <strong>{{ $totalTasks }}</strong>
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
