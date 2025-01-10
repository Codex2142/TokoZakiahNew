<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top bg-secondary-subtle text-primary-emphasis">
    <div class="container-fluid">
        <a class="navbar-brand" href="/beranda">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produk">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/totalan">Totalan</a>
                </li>
                <li class="nav-item dropdown">
                    <div class="btn-group">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><button class="dropdown-item" type="button"><i class="bi bi-info-circle"></i> Informasi</button></li>
                            <li><a href="/profil" class="text-decoration-none"><button class="dropdown-item" type="button"><i class="bi bi-person-circle"></i> Akun</button></a></li>
                            <li><button class="dropdown-item" type="button"><i class="bi bi-power"></i> Logout</button></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<script>
    const toggleButton = document.getElementById('toggleDarkMode');
    const toggleIcon = document.getElementById('toggleIcon');
    const body = document.body;

    // Set default mode to light mode
    body.classList.add('light-mode');

    toggleButton.addEventListener('click', () => {
        if (body.classList.contains('light-mode')) {
            // Switch to dark mode
            body.classList.remove('light-mode');
            body.classList.add('dark-mode');
            toggleIcon.classList.remove('bi-moon-fill');
            toggleIcon.classList.add('bi-brightness-high-fill');
            toggleButton.innerHTML = '<i id="toggleIcon" class="bi bi-brightness-high-fill"></i> Light Mode';
            toggleButton.style.backgroundColor = 'darkblue'; // Set background for dark mode
            toggleButton.style.color = 'white'; // Set text color for dark mode
        } else {
            // Switch to light mode
            body.classList.remove('dark-mode');
            body.classList.add('light-mode');
            toggleIcon.classList.remove('bi-brightness-high-fill');
            toggleIcon.classList.add('bi-moon-fill');
            toggleButton.innerHTML = '<i id="toggleIcon" class="bi bi-moon-fill"></i> Dark Mode';
            toggleButton.style.backgroundColor = 'yellow'; // Set background for light mode
            toggleButton.style.color = 'black'; // Set text color for light mode
        }
    });
</script>
