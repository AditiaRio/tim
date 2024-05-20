<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Form Login</title>
    <link rel="stylesheet" href="{{ asset('template_register/style.css') }}">
</head>
<body>
        <div class="kotak_login">
        <h1>Form Login</h1>
        <form action="{{ route('actionlogin') }}" method="POST">
        @if (session('error'))
    <div class="alert alert-danger">
        <b>Opps!</b> {{ session('error') }}
    </div>
 @endif
 @csrf
 <div class="container">
 <label for="psw"><b>Email</b></label>
 <input class="form_login" type="text" placeholder="Masukan Email" name="email" required>
 <label for="psw-repeat"><b>Password</b></label>
 <input class="form_login" type="password" placeholder="Masukan Password" name="password" required>
 <button type="submit" class="tombol_login">Login</button>
 </div>
 <div class="register_link">
    <p>Belum punya akun? <a href="{{ route('register') }}">disini</a>.</p>
</div>
 </form>
 </div>
</body>
</html>