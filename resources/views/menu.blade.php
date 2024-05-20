<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Menu Minuman Kita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Custom Styles */
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }

        .gambar-produk {
            max-width: 100%;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        header {
            background-color: #343a40;
            color: #ffffff;
            padding: 15px 0;
        }

        .navbar {
            background-color: transparent;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav .nav-link {
            padding: 10px 20px;
            margin: 0 5px;
            border-radius: 8px;
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover {
            color: #000000 !important;
        }

        .btn-outline-success {
            color: #08e049;
            border-color: #08e049;
        }

        .btn-outline-success:hover {
            background-color: #ffffff;
            color: #343a40;
        }

        main {
            background-color: #ffffff;
            padding: 50px 0;
        }

        .menu-item {
            text-align: center;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .menu-item h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .menu-item p {
            font-size: 18px;
        }

        .harga {
            font-weight: bold;
            color: #08e049;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logo.png')}}" alt="Logo Toko" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/dasbor">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/menu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tentang">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kontak">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="logoutLink" onclick="handleLogout()">Logout</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Cari">
                        <button class="btn btn-outline-success" type="submit">Cari</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Menu Minuman Kita</h1>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="menu-item">
                        <img src="{{ asset('img/kopi.jpeg')}}" class="img-fluid gambar-produk" alt="Kopi">
                        <h2>Kopi</h2>
                        <p>Nikmati kehangatan dan keharuman kopi segar dari berbagai belahan dunia.</p>
                        <p class="harga">Rp 20.000</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="menu-item">
                        <img src="{{ asset('img/anggur.png')}}" class="img-fluid gambar-produk" alt="Anggur">
                        <h2>Anggur</h2>
                        <p>Hadirkan sentuhan elegan ke meja makan Anda dengan berbagai pilihan anggur berkualitas tinggi.</p>
                        <p class="harga">Rp 50.000</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-item">
                            <img src="{{ asset('img/jus.jpeg')}}" class="img-fluid gambar-produk" alt="Jus">
                            <h2>Jus Segar</h2>
                            <p>Rasakan kesegaran dari jus buah segar yang kaya akan vitamin.</p>
                            <p class="harga">Rp 15.000</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-item">
                            <img src="{{ asset('img/teh.jpg')}}" class="img-fluid gambar-produk" alt="Teh" width="145"> 
                            <h2>Teh</h2>
                            <p>Nikmati segarnya teh dari berbagai varian.</p>
                            <p class="harga">Rp 10.000</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-item">
                            <img src="{{ asset('img/smotis.png')}}" class="img-fluid gambar-produk" alt="Smoothie">
                            <h2>Smoothie</h2>
                            <p>Nikmati kesegaran smoothie buah segar.</p>
                            <p class="harga">Rp 25.000</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-item">
                            <img src="{{ asset('img/moktel.png')}}" class="img-fluid gambar-produk" alt="Mocktail" width="150">
                            <h2>Mocktail</h2>
                            <p>Nikmati minuman non-alkohol yang segar dan lezat.</p>
                            <p class="harga">Rp 30.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Hak Cipta &copy; 2024 Minuman Kita [RioAditia | AdityaRama]S</p>
                    </div>
                </div>
            </div>
        </footer>
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-jXiQ/3O1Jx7fCpjWUvRvyluCp1rXtSpH6MQoV95L3qNCN3sN1N54ir2jUipbpvf7"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-pLZG3+MA2D9zMeXpfC+Yc09gI+kbSZDUtNQF2epiA6nHJT5B1DbuJELfCzJXyQJn"
            crossorigin="anonymous"></script>

            <script>
                function handleLogout() {
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    fetch('{{ route('logout') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        credentials: 'same-origin'
                    })
                    .then(response => {
                        if (response.ok) {
                            window.location.href = '/';
                        }
                    })
                    .catch(error => console.error('Error:', error));
                }
                </script>
    </body>
    
    </html>
    