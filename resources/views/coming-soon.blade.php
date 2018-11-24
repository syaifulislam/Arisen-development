<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Under Development.</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito|Open+Sans" rel="stylesheet">
    <link href="{{ asset('css/desktop.css') }}" rel="stylesheet"> 
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">   
    <style>
        body{margin: 0;padding:0;}
    </style>
    </head>
    <body>
        <div class="all-body">
            <div class="part-1">
                <h2>MAAF</h2>
                <h3>Situs ini Sedang Dalam Pengembangan</h3>
                <p>Selama masa Pengembangan, situs ini tidak dapat diakses untuk sementara waktu. Mohon Maaf atas ketidaknyamanannya. Kami akan segera kembali.</p>
                <p>Terima Kasih.</p>
                <div style="width: 20%;padding-left: 383px;"><a href="{{ url()->previous() }}"><input  type="submit" id="simpan" name="submit" value="Kembali" /></a></div>
            </div>
       </div>
    </body> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</html>
