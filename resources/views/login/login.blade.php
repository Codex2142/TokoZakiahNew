<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('{{ asset('img/jibril.png') }}');
            background-size: cover;
            background-position: center;
            filter: blur(8px) brightness(50%);
            z-index: -1;
        }
        .container-custom {
            padding: 2rem;
            max-width: 600px;
        }
        @media (min-width: 768px) {
            .container-custom {
                min-height: 60vh;
                max-width: 800px;
            }
        }
        .container-fluid {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid d-flex vh-100 align-items-center justify-content-center" style="border:1px solid">
        <div class="container bg-white shadow container-custom rounded">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 text-center d-none d-md-block">
                    <img src="{{ asset('img/jibril.png') }}" alt="Profile Image" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="text-center mb-4 d-md-none">
                        <img src="{{ asset('img/jibril.png') }}" alt="Profile Image" class="img-fluid mb-3">
                    </div>
                    <h1 class="text-center text-primary">Login</h1>
                    <p class="text-center text-info-emphasis">Halaman Login Website<br> Toko Zakiah</p>
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label text-info-emphasis">Username</label>
                            <input type="text" id="username" class="form-control" placeholder="Masukkan Username" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-info-emphasis">Password</label>
                            <input type="password" id="password" class="form-control" placeholder="Masukkan password">
                        </div>
                        <button type="submit" class="btn btn-success w-100 mt-4">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
