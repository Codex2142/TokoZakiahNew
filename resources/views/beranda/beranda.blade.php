<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            padding-top: 70px; /* Space for the fixed navbar on larger screens */
        }
        @media (max-width: 768px) {
            body {
                padding-top: 65px; /* Adjusted space for smaller screens */
            }
        }
    </style>
</head>
<body>
    @include('layout.header')
    <div class="container-fluid">
        <div class="container text-center">

            <!-- Laptop Layout -->
            <div class="row d-none d-md-flex">
                <div class="col-2">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="card text-center" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title">JANUARI</h3>
                                    <h1 class="card-title">13</h1>
                                    <h3 class="card-title">2025</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card text-center" style="width: 18rem;">
                                <div class="card-body">
                                    <h1 class="card-title">Rp. 43.000</h1>
                                    <h3 class="card-title">Pendapatan Harian</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9 offset-1">
                    <img src="{{ asset('img/jibril.png') }}" alt="Profile Image" class="img-fluid">
                </div>
            </div>
            <div class="row mt-2 d-none d-md-flex">
            <div class="col-3">
                <button type="button" class="btn btn-warning w-100">TOTALAN</button>
            </div>
                <div class="col-2 offset-7">
                    <div class="col">
                        <button type="button" class="btn btn-warning w-100">SELENGKAPNYA</button>
                    </div>
                </div>
            </div>

            <!-- Mobile Layout -->
            <div class="row d-flex d-md-none">
                <!-- Date Card -->
                <div class="col-12 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title">JANUARI</h3>
                            <h1 class="card-title">13</h1>
                            <h3 class="card-title">2025</h3>
                        </div>
                    </div>
                </div>

                <!-- Daily Income Card -->
                <div class="col-12 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h1 class="card-title">Rp. 43.000</h1>
                            <h3 class="card-title">Pendapatan Harian</h3>
                        </div>
                    </div>
                </div>

                <!-- Totalan Button 1 -->
                <div class="col-12 mb-3">
                    <button type="button" class="btn btn-warning w-100">TOTALAN</button>
                </div>
                <!-- Large Column Content -->
                <div class="col-12 mb-3">
                    <img src="{{ asset('img/jibril.png') }}" alt="Profile Image" class="img-fluid">
                </div>

                <!-- Totalan Button 2 -->
                <div class="col-12">
                    <button type="button" class="btn btn-warning w-100">SELENGKAPNYA</button>
                </div>
            </div>

        </div>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
