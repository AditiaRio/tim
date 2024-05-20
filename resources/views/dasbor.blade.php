<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dasbor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Custom Styles */
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
            background-color: #f8f9fa;
            padding: 50px 0;
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
                    <h1>Selamat Datang di Minuman Kita</h1>
                    <p>Temukan Berbagai Macam Minuman dari Seluruh Dunia</p>
                    <a href="/menu" class="btn btn-primary">Jelajahi Minuman Kami</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('img/kopi.jpeg')}}" class="img-fluid gambar-produk" alt="Kopi" >
                    <h2 class="text-center">Kopi</h2>
                    <p class="text-center">Nikmati kehangatan dan keharuman kopi segar dari berbagai belahan dunia.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/anggur.png')}}" class="img-fluid gambar-produk" alt="Anggur">
                    <h2 class="text-center">Anggur</h2>
                    <p class="text-center">Hadirkan sentuhan elegan ke meja makan Anda dengan berbagai pilihan anggur berkualitas tinggi.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/jus.jpeg')}}" class="img-fluid gambar-produk" alt="Jus">
                    <h2 class="text-center">Jus Segar</h2>
                    <p class="text-center">Rasakan kesegaran dari jus buah segar yang kaya akan vitamin.</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Hak Cipta &copy; 2024 Minuman Kita [RioAditia | AdityaRama]</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-jXiQ/3O1Jx7fCpjWUvRvyluCp1rXtSpH6MQoV95L3qNCN3sN1N54ir2jUipbpvf7"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.33.3/dist/js/bootstrap.min.js" integrity="sha384-pLZG3+MA2D9zMeXpfC+Yc09gI+kbSZDUtNQF2epiA6nHJT5B1DbuJELfCzJXyQJn" crossorigin="anonymous"></script>

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
                    window.location.href = 'register';
                }
            })
            .catch(error => console.error('Error:', error));
        }
        </script>
        
</body>
</html>
