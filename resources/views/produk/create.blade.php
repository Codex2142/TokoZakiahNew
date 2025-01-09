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
    <a href="/produk"><button type="button" class="btn btn-primary ms-4"><i class="bi bi-arrow-left"></i></button></a>
    <div class="container-fluid mt-ms-4">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column (Form) -->
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="namaProduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="namaProduk" placeholder="Masukkan nama produk">
                        </div>
                        <div class="mb-3">
                            <label for="hargaGrosir" class="form-label">Harga Grosir</label>
                            <input type="text" class="form-control" id="hargaGrosir" placeholder="Masukkan harga grosir">
                        </div>
                        <div class="mb-3">
                            <label for="hargaBeli" class="form-label">Harga Beli</label>
                            <input type="text" class="form-control" id="hargaBeli" placeholder="Masukkan harga beli">
                        </div>
                        <button type="submit" class="btn btn-success">SIMPAN</button>
                    </form>
                </div>
                <!-- Right Column (Image) - Hidden on Mobile -->
                <div class="col-md-6 text-center d-none d-md-block">
                    <img src="{{ asset('img/jibril.png') }}" class="img-fluid" alt="Product Image">
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
