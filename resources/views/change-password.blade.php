<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ubah Kata Sandi</title>
        <link rel="stylesheet" href="{{ url('/css/layout2.css') }}" media="screen" type="text/css"/>
    </head>
    <body>
        <div class="login-card">
            <h2>Ubah Kata Sandi</h2><br>
            <form action="/auth/change-password" method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input name="user_id" type="hidden" value="{{ $user->id }}"/>
                <input type="password" name="password" class="password" placeholder="Masukan Kata Sandi">
                <p class="error-message errors" style="display:none;"></p>
                <input type="password" name="confirmPassword" class="confirmPassword" placeholder="Ulang Kata Sandi">
                <input type="submit" name="login" class="login login-submit" value="Daftar  ">
            </form>
            @if($errors->any())
                @foreach ($errors->all() as $value)
                    <h4 class="error-message">{{$value}}</h4>                    
                @endforeach
            @endif
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
            $('.confirmPassword').change(function(){
                if(this.value != $('.password').val()){
                    $('.errors').text('Konfirmasi password tidak sama');
                    $('.errors').show();
                    $('.login-submit').attr('disabled',true);
                }else{
                    $('.errors').text('');
                    $('.errors').hide();
                    $('.login-submit').attr('disabled',false);
                }
            });
    </script>
</html>