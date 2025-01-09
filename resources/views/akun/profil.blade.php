<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Information</title>
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

    <div class="container mt-5 mb-5">
        <div class="text-center mb-4">
            <!-- Profile Icon -->
            <img src="{{ asset('img/jibril.png') }}" alt="Profile Icon" class="rounded-circle" style="width: 256px; height: 256px; object-fit: cover;">
        </div>
        <h2 class="text-center mb-4">INFORMASI AKUN</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        User Details
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Username</th>
                                    <td>Petani Militer</td>
                                </tr>
                                <tr>
                                    <th scope="row">Password</th>
                                    <td>********</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dibuat pada</th>
                                    <td>2025-01-01 10:00:00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Terakhir diubah</th>
                                    <td>2025-01-05 15:30:00</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-end">
                            <button class="btn btn-primary me-2">
                                <i class="bi bi-person-fill"></i> Change Username
                            </button>
                            <button class="btn btn-secondary">
                                <i class="bi bi-key-fill"></i> Change Password
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
