<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Register</title>
    <link rel="stylesheet" href="{{ asset('template_register/style.css') }}">
</head>

<body>
    <div class="kotak_login">
        <h1>Register</h1>
        {{-- Notif jika succes register --}}
        @if (session('success'))
            <b style="color: green;">{{ session('success') }}</b>
        @endif

        <form action="{{ url('/actionregister') }}" method="POST">
            @csrf
            <div class="container">
                <label for="email"><b>Nama Lengkap</b></label>
                <input class="form_login" type="text" placeholder="Masukan Nama Lengkap" name="name" required>

                <label for="psw"><b>Email</b></label>
                <input class="form_login" type="text" placeholder="Masukan Email" name="email" required>

                <label for="psw-repeat"><b>Password</b></label>
                <input class="form_login" type="password" placeholder="Masukan Password" name="password" required>

                <label for="psw-repeat"><b>Re Password</b></label>
                <input class="form_login" type="password" placeholder="Re Password" name="password_confirmation"
                    required>

                <button type="submit" class="tombol_login">Register</button>
            </div>
            <div class="login_link">
                <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>.</p>
            </div>
        </form>

    </div>

</body>

</html>