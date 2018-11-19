<!DOCTYPE html>

<html lang="">
<head>
<title>ARISEN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="{{ url('/css/layout3.css') }}" media="screen" type="text/css" />
<link rel="stylesheet" href="{{ url('/css/login.css') }}" media="screen" type="text/css" />

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
@include('header-name')
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">

    </div>
    <div id="quickinfo" class="fl_right">

    </div>
    <!-- ################################################################################################ -->
  </header>
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    @include('nav-bar')
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/backgrounds/01.png');">
  <section id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
   
    <!-- ################################################################################################ -->
    <h6 class="heading">Buat Ruangan</h6>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3" >
  <main class="hoc container clear" > 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div > 
      <!-- ################################################################################################ -->
        <div class="add-ruangan">

          <div  class="login-card">
              <form method="POST" action="create-room" enctype="multipart/form-data">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input class="aktifasi-text" type="text" name="room_name" placeholder="Judul Arisan Anda">
                <div class="add-nominal">
                  <div class="currency">Rp</div>
                  <input  type="number" name="price_per_player" min="10000" step="500" data-number-stepfactor="10000" placeholder="Biaya Per Orang">
                </div>
                <select name="period" class="arisan-per2">
                  <option value="">-----Tentukan Berlangsungnya Arisan-----</option>
                  <option value="Mingguan">Mingguan</option>
                  <option value="Bulanan">Bulanan</option>
                  <option value="Tahunan">Tahunan</option>
                </select>
                <div class="add-user">
                  <div class="inf-user2">Pemain</div>
                  <input  type="number" name="total_player" min="2" max="100" step="1" data-number-stepfactor="10000" placeholder="Total Pemain">
                </div>
                <div class="kunci">
                  <div class="kunci2">
                      Kunci <input class="rad-kun" type="radio" onclick="javascript:yesnoCheck();" name="private" id="yesCheck"> 
                  </div>
                  <div class="kunci3">
                      Tidak <input class="rad-kun" type="radio" onclick="javascript:yesnoCheck();" name="public" id="noCheck">
                  </div>
                </div>
                <div id="ifYes" style="display:none">
                  <input type='password' id='yes' name='password' placeholder="Masukan Kata Sandi">
                  <input type='password' id='acc' name='passwordConfirm' placeholder="Masukan Ulang Kata Sandi">
                </div>

                <input  type="submit" name="login" class="login login-submit" value="BUAT RUANGAN">
              </form>
          </div>
        </div>

      <!-- ################################################################################################ -->
    </div>

    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
@include('footer')
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.backtotop.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.tambah-ruangan.js"></script>
</body>
</html>