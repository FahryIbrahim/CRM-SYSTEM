<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In - Segawon CMS</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.ico') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/css/styles.min.css') }}"
    />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper"
        id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
    <div
        class="overflow-hidden position-relative radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="mb-0 card">
                        <div class="card-body">
                            <a href="./index.html" class="py-3 text-center text-nowrap logo-img d-block w-100">
                                <img src="{{asset('assets/images/logos/logo.png')}}" width="180" alt="">
                            </a>
                            <p class="text-center">Modern CMS</p>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <input class="form-check-input primary" type="checkbox" value=""
                                            id="flexCheckChecked" checked>
                                        <label class="form-check-label text-dark" for="flexCheckChecked">
                                            Remember this Device
                                        </label>
                                    </div>
                                </div>
                                <a href="./index.html" class="py-8 mb-4 btn btn-primary w-100 fs-4 rounded-2">Sign
                                    In</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>
