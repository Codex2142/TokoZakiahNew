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
    <button type="button" class="btn btn-primary ms--sm-5 ms-4"><i class="bi bi-arrow-left"></i></button>
    <div class="container-fluid">
        <div class="container text-center mt-5">
            <div class="row d-flex align-items-center">
                <div class="col-sm-4 col-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="bi bi-x-circle-fill"></i></button>
                    </div>
                </div>
                <div class="col-sm-1 col-12 offset-sm-6">
                    <button type="button" class="btn btn-success">Tambahkan</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- produk -->

    <div class="container-fluid mt-4">
        <div class="container">
            <div class="row">
                <!-- Card 1 -->

                <!-- loop -->
                <div class="col-6 col-lg-3 mb-3">
                    <div class="card" style="width: 100%;" data-bs-toggle="collapse" data-bs-target="#buttons-1" aria-expanded="false" aria-controls="buttons-1">
                        <div class="card-body">
                            <h5 class="card-title mb-5">Cleo Gelas</h5>
                            <p class="card-text">11 Januari 2025</p>
                            <div class="row align-items-center mb-2">
                                <div class="col-6">
                                    <h6 class="card-subtitle text-body-secondary">Beli:</h6>
                                </div>
                                <div class="col-6">
                                    Rp. 49.000
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h6 class="card-subtitle text-body-secondary">Grosir:</h6>
                                </div>
                                <div class="col-6">
                                    Rp. 53.000
                                </div>
                            </div>
                        </div>
                            <div class="card-body text-center">
                                <button class="btn btn-primary mb-2 w-100">Button 1</button>
                                <button class="btn btn-secondary w-100">Button 2</button>
                            </div>
                        </div>
                </div>
                


                <!-- end loop -->
                <div class="col-6 col-lg-3 mb-3">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title.</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
