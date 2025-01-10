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
    <a href="/beranda"><button type="button" class="btn btn-primary ms-4"><i class="bi bi-arrow-left"></i></button></a>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <!-- Column 1: Pendapatan Harian, Mingguan, Bulanan -->
                <div class="col-md-6 d-flex flex-column align-items-center mb-5">
                <h1 class="mb-1 mt-4">PENDAPATAN</h1>
                    <div class="row">
                        <div class="col-12 mb-2 d-flex justify-content-center">
                            <div class="card text-center" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title">HARIAN</h3>
                                    <h1 class="card-title">Rp. 1.000.000</h1>
                                    <h3 class="card-title">Senin</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2 d-flex justify-content-center">
                            <div class="card text-center" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title">MINGGUAN</h3>
                                    <h1 class="card-title">Rp. 4.000.000</h1>
                                    <h3 class="card-title">13 JAN</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card text-center" style="width: 18rem;">
                                <div class="card-body">
                                    <h3 class="card-title">BULANAN</h3>
                                    <h3 class="card-title">Rp. 13.000.000</h3>
                                    <h3 class="card-title">JAN 2025</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Diagram and Buttons -->
                <div class="col-md-6 d-flex flex-column justify-content-center mb-5">
                    <div class="row">
                        <!-- Month Header -->
                        <div class="col-12 bg-secondary py-1 text-center">
                            <h6>Januari</h6>
                        </div>
                        <!-- Diagram -->
                        <div class="col-12 mb-2">
                            <div class="bg-secondary text-center">
                                <img src="{{ asset('img/jibril.png') }}" class="img-fluid" alt="Product Image">
                            </div>
                        </div>
                        <!-- Buttons -->
                        <div class="col-12 text-center mt-2">
                            <button type="button" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Sebelumnya</button>
                            <button type="button" class="btn btn-success"><i class="bi bi-arrow-right"></i> Selanjutnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-sm-5 mb-sm-5 justify-content-center">
        <div class="row g-3"> <!-- g-3 adds a gap between columns -->
            <!-- Column 1: col-7 -->
            <div class="col-12 col-md-6 text-center mb-5">
                <h2 class="mb-1">Produk yang sering dibeli Bulan <span>Januari</span></h2>
                <img src="{{ asset('img/jibril.png') }}" class="img-fluid" alt="Product Image">
            </div>

            <!-- Column 2: col-5 -->
            <div class="col-12 col-md-6 text-center mb-5">
                <h2 class="mb-1">Pendapatan Tahunan</h2>
                <img src="{{ asset('img/jibril.png') }}" class="img-fluid" alt="Product Image">
            </div>
        </div>
    </div>





    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
