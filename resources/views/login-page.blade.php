<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Masuk ARISEN</title>
        <link rel="stylesheet" href="{{ url('/css/layout2.css') }}" media="screen" type="text/css" />
    </head>
    <body>
        <div class="login-card">
            <h2>MASUK</h2><br>
            <form action="login" method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="email" name="email" placeholder="Email Pengguna">
                <input type="password" name="password" placeholder="Kata Sandi">
                <input type="submit" name="login" class="login login-submit" value="Masuk">
            </form>
            <div class="login-help">
                <a href="register">Daftar</a> • <a href="forgot-password">Lupa Kata Sandi</a>
            </div>
            @if($errors->any())
                <h4 class="error-message">{{$errors->first()}}</h4>                    
            @endif
        </div>
    </body>
</html>