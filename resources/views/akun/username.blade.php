<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Username</title>
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

    <div class="container mt-5">
        <h2 class="text-center mb-4">Change Username</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        Update Your Username
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="currentUsername" class="form-label">Current Username</label>
                                <input type="text" class="form-control" id="currentUsername" value="Petani Militer" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="newUsername" class="form-label">New Username</label>
                                <input type="text" class="form-control" id="newUsername" name="newUsername" placeholder="Enter new username" required>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-success">Simpan Username</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
