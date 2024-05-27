<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dasbor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px 15px;
            border: none;
        }

        .openbtn:hover {
            background-color: #444;
        }

        .main-content {
            margin-left: 0;
            transition: margin-left 0.5s;
            padding: 16px;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content-container {
            text-align: center;
        }

        .navbar-nav .nav-link {
            font-size: 18px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="openbtn" onclick="openNav()">☰ Menu</button>
                <div class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a class="nav-link active" aria-current="page" href="/pendaftaran1">Pendaftaran 1</a>
                    <a class="nav-link" href="/pendaftaran2">Pendaftaran 2</a>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Cari">
                    <button class="btn btn-outline-success" type="submit">Cari</button>
                </form>
            </div>
        </nav>
    </header>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="/dasbor">Beranda</a>
        <a href="/menu">Menu</a>
        <a href="/tentang">Tentang Kami</a>
        <a href="/kontak">Kontak</a>
        <a href="#" onclick="handleLogout()">Logout</a>
    </div>

    <main class="main-content">
        <div class="container content-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h1>Selamat Datang di Minuman Kita</h1>
                    <p>Temukan Berbagai Macam Minuman dari Seluruh Dunia</p>
                    <a href="/menu" class="btn btn-primary">Jelajahi Minuman Kami</a>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('img/kopi.jpeg')}}" class="img-fluid gambar-produk" alt="Kopi">
                    <h2>Kopi</h2>
                    <p>Nikmati kehangatan dan keharuman kopi segar dari berbagai belahan dunia.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('img/anggur.png')}}" class="img-fluid gambar-produk" alt="Anggur">
                    <h2>Anggur</h2>
                    <p>Hadirkan sentuhan elegan ke meja makan Anda dengan berbagai pilihan anggur berkualitas tinggi.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('img/jus.jpeg')}}" class="img-fluid gambar-produk" alt="Jus">
                    <h2>Jus Segar</h2>
                    <p>Rasakan kesegaran dari jus buah segar yang kaya akan vitamin.</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Hak Cipta &copy; 2024 Minuman Kita [RioAditia | AdityaRama]</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-jXiQ/3O1Jx7fCpjWUvRvyluCp1rXtSpH6MQoV95L3qNCN3sN1N54ir2jUipbpvf7" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.33.3/dist/js/bootstrap.min.js" integrity="sha384-pLZG3+MA2D9zMeXpfC+Yc09gI+kbSZDUtNQF2epiA6nHJT5B1DbuJELfCzJXyQJn" crossorigin="anonymous"></script>

    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.querySelector('.main-content').style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.querySelector('.main-content').style.marginLeft = "0";
        }

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
                } else {
                    console.error('Logout failed');
                }
            })
            .catch(error => console.error('Error:', error));
        }
    </script>
</body>

</html>
