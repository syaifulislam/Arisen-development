<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Daftar ARISEN</title>
        <link rel="stylesheet" href="{{ url('/css/layout2.css') }}" media="screen" type="text/css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    </head>
    <body>
        <div class="login-card">
            <h2>PENDAFTARAN</h2><br>
            <form action="register" method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="text" name="first_name" placeholder="Nama Depan">
                <input type="text" name="last_name" placeholder="Nama Belakang">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="birtdate" class="datepicker" placeholder="Tanggal Lahir">
                <input name="birth_date" style="display:none;" class="birthDate" value=""/>
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
    <script src="http://www.datejs.com/build/date.js" type="text/javascript"></script>
    <script>
            $(function(){$( ".datepicker" ).datepicker();});
            $('.datepicker').on('change',function(){
                var mydate = new Date(this.value);
                $('.birthDate').val(mydate.getFullYear()+'-'+(mydate.getMonth()+1)+'-'+mydate.getDate());
            });
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