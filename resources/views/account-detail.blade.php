<!DOCTYPE html>

<html lang="">
<head>
<title>ARISEN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="{{ url('/css/layout.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ url('/css/login.css') }}" media="all" type="text/css" />

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
    <h6 class="heading">Detail Akun</h6>
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
    <div class="content-2"> 
      <!-- ################################################################################################ -->
        <div class="aktif-akun">
          <div class="status-user">
            <h1>Status:{{Sentinel::getUser()->is_verif == 1 ? 'TERAKTIFASI' : 'BELUM TERAKTIFASI'}}</h1>
          </div>
          @if (!$data->user_details)
          <div  class="login-card">
              <form action="verification" method="POST" enctype="multipart/form-data">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input class="aktifasi-text" type="text" name="bank_account_number" placeholder="Nomor Rekening Anda">
                <input class="aktifasi-text" type="text" name="bank_account_name" placeholder="Nama Pemilik Rekening">
                <input class="aktifasi-text" type="text" name="bank_account_office" placeholder="Kantor Cabang">
                <label>Contoh Foto Aktifasi</label> 
                <div class="contoh-aktifasi"></div>
                  <div class="col-lg-12">
                    <label>Masukan Berkas Anda</label> 
                    <input type="file" name="fileToUpload" id="fileToUpload" class="chs-file">

                    <p>Berkas Maximal 5 MB.</p>                  
                  </div>
                <input  type="submit" name="login" class="login login-submit" value="AKTIFKAN">
              </form>
          </div>
          @endif
        </div>
        <div class="content-l">
          <img class="profile-mar" src="/images/imgl.gif">
          <div class="detail-akun-id">
            <div class="username-user">
            <h1 class="text-align">{{$data->first_name}} {{$data->last_name}}</h1>
            </div>
            <div class="id-user">
              <h1 class="text-align">1701333260</h1>
            </div>
            <div class="saldo-user">
            <h1 class="text-align">Rp.{{$data->user_details ? $data->user_details->money : 0}}</h1>
            </div>
            <a href="#"><div class="button-setor"></div></a>
            <a href="#"><div class="button-tarik"></div></a>
            <a href="#"><div class="button-his-uang"></div></a>
            <a href="#"><div class="button-his-main"></div></a>
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
<div class="wrapper row4 bgded overlay" style="background-image:url('/images/backgrounds/03.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h2 class="heading">Dodmond</h2>
      <nav>
        <ul class="nospace inline pushright uppercase">
          <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Cookies</a></li>
          <li><a href="#">Disclaimer</a></li>
        </ul>
      </nav>
    </div>
    <!-- ################################################################################################ -->
    <hr class="btmspace-50">
    <!-- ################################################################################################ -->
    <div class="group">
      <div class="one_third first">
        <h6 class="heading">Curabitur varius cursus</h6>
        <ul class="nospace btmspace-30 linklist contact">
          <li><i class="fa fa-map-marker"></i>
            <address>
            Street Name &amp; Number, Town, Postcode/Zip
            </address>
          </li>
          <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
          <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
          <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
        </ul>
      </div>
      <div class="one_third">
        <h6 class="heading">Magna mattis nibh ut</h6>
        <figure><a href="#"><img class="borderedbox inspace-10 btmspace-15" src="/images/320x168.png" alt=""></a>
          <figcaption>
            <h6 class="nospace font-x1"><a href="#">Proin commodo semper</a></h6>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          </figcaption>
        </figure>
      </div>
      <div class="one_third">
        <h6 class="heading">Potenti ullamcorper</h6>
        <p class="nospace btmspace-30">Vel dolor vestibulum consequat nullam porttitor suspendisse potenti.</p>
        <form method="post" action="#">
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" value="" placeholder="Name">
            <input class="btmspace-15" type="text" value="" placeholder="Email">
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{ url('/js/jquery.min.js') }}"></script>
<script src="{{ url('/js/jquery.backtotop.js') }}"></script>
<script src="{{ url('/js/jquery.mobilemenu.js') }}"></script>
</body>
</html>