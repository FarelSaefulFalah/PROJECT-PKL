<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="theme_ocean" />
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/images/logo-abbr.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/css/vendors.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/css/daterangepicker.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/theme.min.css') }}" />
    <!-- Add custom CSS -->
    <style>
        .user-avatar {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }

        .role-label {
            font-size: 1.2em;
            font-weight: bold;
        }

        .wide-button {
            width: 100%;
        }
    </style>
    @yield('css')
</head>

<body>
    @include('include.backend.sidebar')
    @include('include.backend.header')
    <div class="main-content-wrapper">
        <main class="nxl-container">
            <div class="nxl-content">
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Profile</li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-5">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <center>
                                    <h3>My Profile</h3>
                                    <img src="{{ asset('backend/assets/images/avatar/1.png') }}" alt="user-image"
                                        class="img-fluid user-avatar" />
                                    <h3>
                                        <span class="text-primary">{{ Auth::user()->name }}</span>
                                    </h3>
                                    <small>{{ Auth::user()->email }}</small>
                                </center>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <p>Username: <b>{{ Auth::user()->name }}</b></p>
                                        <p>Email Address: <b>{{ Auth::user()->email }}</b></p>
                                        <p>Status: <b>{{ Auth::user()->is_admin ? 'Admin' : 'User' }}</b></p>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <a href="{{ route('berita.create') }}" class="btn btn-primary wide-button">Add
                                            Berita</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="btn btn-primary wide-button">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    @include('include.backend.footer')
    <script src="{{ asset('backend/assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/common-init.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dashboard-init.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/theme-customizer-init.min.js') }}"></script>
    @yield('js')
    @stack('script')
</body>

</html>
