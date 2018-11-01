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
                <input type="text" name="username" id="user-null" placeholder="Nama Pengguna">
                <input type="password" name="password" id="pass-null" placeholder="Kata Sandi">
                <input type="submit" name="login" class="login login-submit" value="Masuk" style="cursor: not-allowed;" disabled>
            </form>
            <div class="login-help">
                <a href="register">Daftar</a> • <a href="forgot-password">Lupa Kata Sandi</a>
            </div>
            {{-- @if($errors->any())
                <h4 class="error-message">{{$errors->first()}}</h4>                    
            @endif --}}
            @if ($errors->any()) 
                <div class="alert alert-danger alert-flash-red alert-flash">
                    <h3 class="alert-flash-col"> 
                            <span><i class="white-flash"></i></span>
                            <span class="white-flash">{{ $errors->first() }}</span> 
                    </h3>
                </div>
            @endif
            @if (session()->has('message'))
                <div class="alert alert-danger alert-flash-blue alert-flash">
                    <h3 class="alert-flash-col"> 
                            <span><i class="white-flash"></i></span>
                            <span class="white-flash">{{ session()->get('message') }}</span> 
                    </h3>
                </div>
            @endif
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            setTimeout(function() {
                $('.alert-flash').fadeOut('fast');
            }, 3000);
        });

        $('#user-null').change(function(){
            if(this.value != '' && $('#pass-null').val() != ''){
                $('.login-submit').removeAttr('disabled');
                $('.login-submit').removeAttr('style');
            }else{
                $('.login-submit').attr('disabled',true);
                $('.login-submit').css('cursor','not-allowed');
            }
        });

        $('#pass-null').keypress(function(){
            if(this.value != '' && $('#user-null').val() != ''){
                $('.login-submit').removeAttr('disabled');
                $('.login-submit').removeAttr('style');
            }else{
                $('.login-submit').attr('disabled',true);
                $('.login-submit').css('cursor','not-allowed');
            }
        });
    </script>
</html>