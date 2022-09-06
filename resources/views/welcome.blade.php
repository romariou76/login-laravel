<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Login</title>
    </head>
    <body>
        <form action="" method="POST">
            <div class="form">
                <h1>Login</h1>
                <label>Email</label>
                <input type="email" name="email">
                <label>Password</label>
                <input type="password" name="password">
                <button>Enviar</button>
                <p>¿no tienes una cuenta?<a href="/register"> registrate aqui</a></p>
            </div>
        </form>
    </body>
</html>
