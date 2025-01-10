<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
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
        .hidden {
            display: none !important;
        }
        
    </style>
</head>
<body>
    @include('layout.header')
    <a href="/beranda"><button type="button" class="btn btn-primary ms-4"><i class="bi bi-arrow-left"></i></button></a>
    <div class="container-fluid">
        <div class="container text-center mt-5">
            <div class="row d-flex align-items-center">
                <div class="col-sm-4 col-12">
                    <div class="input-group mb-3">
                        <input id="searchInput" type="text" class="form-control" placeholder="Cari Nama Produk" aria-label="Search" aria-describedby="button-addon1" autocomplete="off">
                        <button id="clearButton" class="btn btn-outline-danger" type="button"><i class="bi bi-x-circle-fill"></i></button>
                    </div>
                </div>
                <div class="col-sm-1 col-12 offset-sm-6">
                    <a href="/produk/tambahkan"><button type="button" class="btn btn-success">Tambahkan</button></a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- produk -->
    <div class="container-fluid mt-4">
        <div class="container">
            <div class="row" id="productContainer">
                <!-- Card 1 -->
                <div class="col-6 col-lg-3 mb-3 product-card">
                    <div class="card" style="width: 100%;">
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
                            <button class="btn btn-warning mb-2 w-100"><i class="bi bi-pencil"></i> Edit</button>
                            <button class="btn btn-danger w-100"> <i class="bi bi-trash"></i> Hapus</button>
                        </div>
                    </div>
                </div>
                <!-- Add more cards here -->
            </div>
        </div>
    </div>
    
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('searchInput');
            const clearButton = document.getElementById('clearButton');
            const productCards = document.querySelectorAll('.product-card');

            // Search functionality
            searchInput.addEventListener('input', () => {
                const query = searchInput.value.toLowerCase();
                productCards.forEach(card => {
                    const title = card.querySelector('.card-title').textContent.toLowerCase();
                    if (title.includes(query)) {
                        card.classList.remove('hidden');
                    } else {
                        card.classList.add('hidden');
                    }
                });
            });

            clearButton.addEventListener('click', () => {
                searchInput.value = '';
                productCards.forEach(card => {
                    card.classList.remove('hidden');
                });
            });
        });
    </script>
</body>
</html>
