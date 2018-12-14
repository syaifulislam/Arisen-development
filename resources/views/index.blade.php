<!DOCTYPE html>
<html lang="">
<head>
<title>ARISEN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
{{-- <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all"> --}}
<link rel="stylesheet" href="{{ url('/css/layout.css') }}" media="all" type="text/css" />
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        
      <li><a href="auth/login">Masuk</a></li>
        <li><a href="auth/register">Daftar</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear" style="background-image:url('images/logo/logo-header.png'); background-repeat: no-repeat; background-position: center; margin-top: 20px; margin-bottom: 20px;"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html"></a></h1>
      <p></p>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">

      </ul>
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
<div class="wrapper bgded overlay" style="background-image:url('images/backgrounds/01.png'); background-attachment: fixed;">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="slider-ctn"> 
      <div class="slider" style="background-image: url('images/slider/1.png');"></div>
      <div class="slider" style="background-image: url('images/slider/2.png');"></div>
      <div class="slider" style="background-image: url('images/slider/3.png');"></div>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="hoc container clear"> 
    <div class="testi" style="background-image:url('images/home/h1.png'); "></div>
    <!-- ################################################################################################ -->
    <ul class="nospace group figures">
      <li class="one_third first">
        <figure><img src="images/home/h2.png" alt="">
          <figcaption><a href="#">Yudha Darmawan Gustavianto</a></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/home/h3.png" alt="">
          <figcaption><a href="#">Tata Suharta</a></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/home/h4.png" alt="">
          <figcaption><a href="#">Narendra Satya Darma</a></figcaption>
        </figure>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <div class="poster" style="background-image: url('images/poster/1.png');"></div>
    </div>
    <ul class="nospace group">
      <li class="one_third first">
        <article>
          <div class="poster-ctn" style="background-image: url('images/poster/2.png');"></div>
          <p style="font-size: 20px; text-align: center;">Arisan Online</p>
          <p class="btmspace-30" style="text-align: center;">Kini kamu tidak lagi bingung mencari teman untuk bermain, karna di Arisen kamu bisa bertemu <br> teman-teman baru</p>
          
        </article>
      </li>
      <li class="one_third">
        <article>
          <div class="poster-ctn" style="background-image: url('images/poster/4.png');"></div>
          <p style="font-size: 20px; text-align: center;">ARBAR</p>
          <p class="btmspace-30" style="text-align: center;">Arisan Bareng, dengan promo menarik megajak teman-teman di ruangan kamu untuk berkumpul mejadi lebih asyik</p>
        </article>
      </li>
      <li class="one_third">
        <article>
          <div class="poster-ctn" style="background-image: url('images/poster/3.png');"></div>
          <p style="font-size: 20px; text-align: center;">Keuangan Tanpa Keraguan</p>
          <p class="btmspace-30" style="text-align: center;">Dengan Arisen kamu tidak perlu lagi ada keraguan untuk mempercayakan uang arisan kamu</p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/backgrounds/02.png');">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="mitra-ctn" style="background-image:url('images/mitra/ctn.png');">
      <div class="mlogo" style="background-image:url('images/mitra/1.png');"></div> 
    </div>

    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <div class="hot-arbar" style="background-image:url('images/poster/5.png');"></div>
    </div>
    <ul class="nospace group figures latest">
      <li class="one_third first">
        <figure>
          <a href="#">
            <img src="images/arbar/1.png" alt="">
          </a>
          <figcaption>
            <figcaption><a href="#">AMBIL</a>
            <time datetime="2045-04-03"><strong>15/30</strong></time>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure>
          <a href="#">
            <img src="images/arbar/2.png" alt="">
          </a>
          <figcaption><a href="#">AMBIL</a>
            <time datetime="2045-03-12"><strong>3/50</strong></time>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure>
          <a href="#">
            <img src="images/arbar/3.png" alt="">
          </a>
          <figcaption><a href="#">AMBIL</a>  
            <time datetime="2045-02-21"><strong>10/80</strong></time>
          </figcaption>
        </figure>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
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
<script>

    var myIndex = 0;
    carousel();
    
    function carousel() {
        var i;
        var x = document.getElementsByClassName("slider");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 3000 ); // Change image every 2 seconds
    }
    </script>
</body>
</html>