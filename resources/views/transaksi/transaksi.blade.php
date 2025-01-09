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
    <div class="row align-items-center ms-4" style="height: 100px;">
        <!-- Back Button -->
        <div class="col-auto">
            <a href="/beranda"><button type="button" class="btn btn-primary"><i class="bi bi-arrow-left"></i></button></a>
        </div>

        <!-- Input Group -->
        <div class="col-auto">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <button class="btn btn-outline-danger" type="button" id="button-addon1"><i class="bi bi-x-circle-fill"></i></button>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="container">
            <div class="row g-3"><!-- Added `g-3` for column gap -->
                <!-- Left Table -->
                <div class="col-md-5">
                    <table class="table table-striped align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Beli</th>
                                <th scope="col">Grosir</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cleo Gelas</td>
                                <td>49.000</td>
                                <td>53.000</td>
                                <td>
                                    <button type="button" class="btn btn-primary"><i class="bi bi-bag-plus"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Right Table -->
                <div class="col-md-7">
                    <table class="table table-striped align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1.</th>
                                <td>Cleo Gelas</td>
                                <td>
                                    <button type="button" class="btn btn-danger">-</button>
                                    <span>1</span>
                                    <button type="button" class="btn btn-success">+</button>
                                </td>
                                <td>49.000</td>
                                <td>49.000</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-6 ">
                            <p class="font-monospace">Total Keseluruhan:</p>
                        </div>
                        <div class="col-6 text-end">
                            <p class="font-monospace">49.000</p>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <button type="button" class="btn btn-success">PROSES</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
