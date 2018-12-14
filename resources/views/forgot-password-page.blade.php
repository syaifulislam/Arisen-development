<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lupa Kata Sandi</title>
        <link rel="stylesheet" href="{{ url('/css/layout2.css') }}" media="screen" type="text/css" />
    </head>
    <body   style="background-image: url(/images/bg/1.png);">
        <div class="login-card bg-login" style="margin-top: 15%;">
        <h2>Lupa Kata Sandi</h2><br>
            <form action="forgot-password" method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="email" name="email" placeholder="Email Pengguna"> 
                <input type="submit" name="login" class="login login-submit" value="Kirim ">
            </form>
            @if($errors->any())
                @foreach ($errors->all() as $value)
                    <h4 class="error-message">{{$value}}</h4>                    
                @endforeach
            @endif
        </div>
    </body>
</html>