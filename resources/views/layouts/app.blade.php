<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Kanaya</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top shadow-sm bg-white">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('landing') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo PT. Kanaya" class="logo">
                <span class="brand-text ms-3">PT. Karya Nata Cahaya</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}#produk">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}#mesin">Mesin</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}#klien">Klien</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <style>
        body {
            scroll-behavior: smooth;
        }

        .navbar-brand .logo {
            height: 45px;
        }

        .navbar-brand .brand-text {
            font-size: 1.3rem;
            font-weight: 700;
            color: #0077b6;
            line-height: 1;
        }

        footer {
            background-color: #1565c0;
            color: #fff;
            padding: 20px 0;
        }

        footer a {
            color: #f8f9fa;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .navbar {
            background-color: #ffffff !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .navbar .nav-link:visited {
            color: #1976d2 !important;
        }

        .navbar .nav-link {
            position: relative;
            color: #1976d2 !important;
            margin-right: 15px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navbar .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 0;
            height: 2px;
            background-color: #0d47a1;
            transition: width 0.3s ease;
        }

        .navbar .nav-link:hover {
            color: #0d47a1 !important;
        }

        .navbar .nav-link:hover::after,
        .navbar .nav-link.active::after {
            width: 100%;
        }

        .navbar-nav .nav-link.active,
        .navbar-nav .nav-item.show .nav-link {
            color: #0d47a1 !important;
            background-color: transparent !important;
        }

        .navbar-brand img {
            height: 42px;
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.05);
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }
    </style>

    <main style="margin-top: 70px;">
        @yield('content')
    </main>

    <footer class="text-center mt-5">
        <div class="container">
            <p class="mb-1">© {{ date('Y') }} PT. Karya Nata Cahaya (PT. Kanaya). Semua Hak Dilindungi.</p>
        </div>
    </footer>


</body>

</html>
