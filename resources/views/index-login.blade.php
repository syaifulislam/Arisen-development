<!DOCTYPE html>
<html lang="">
<head>
<title>ARISEN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="{{ url('/css/layout.css') }}" media="all" type="text/css" />
</head>
<body id="top">
@include('header-name')
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
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
<div class="wrapper bgded overlay" style="background-image:url('images/backgrounds/01.png');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>
            <p>Praesent justo at sem</p>
            <h3 class="heading">Aliquam adipiscing faucibus</h3>
            <p>Lacus urna consectetuer nisi donec lorem metus lobortis eu lacinia nec dignissim sed pede aliquam eget ligula nulla bibendum  nullam lacinia purus eget posuere tristique sapien neque blandit nisl.</p>
            <footer><a class="btn" href="#">Nulla tortor sed</a></footer>
          </article>
        </li>
        <li>
          <article>
            <p>Felis nunc diam pede</p>
            <h3 class="heading">Vivamus eleifend sollicitudin</h3>
            <p>Eget ultrices ipsum enim a diam praesent hendrerit lacus a condimentum scelerisque augue mi ultrices nunc vitae posuere orci dui at sem nulla dignissim venenatis pede nulla at erat adipiscing enim.</p>
            <footer><a class="btn" href="#">Nibh aliquam erat</a></footer>
          </article>
        </li>
        <li>
          <article>
            <p>Vehicula sed pretium</p>
            <h3 class="heading">Laoreet consequat hendrerit</h3>
            <p>Condimentum varius habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas donec eget tellus maecenas vel nullavivamus mattis massa vitae sapien duis eget libero non nisi.</p>
            <footer><a class="btn" href="#">Volutpat curabitur</a></footer>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group figures">
      <li class="one_third first">
        <figure><img src="images/320x320.png" alt="">
          <figcaption><a href="#">Lobortis suscipit</a></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/320x320.png" alt="">
          <figcaption><a href="#">Lorem hendrerit</a></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/320x320.png" alt="">
          <figcaption><a href="#">Convallis pretium</a></figcaption>
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
      <h6 class="heading">Suspendisse venenatis</h6>
      <p>Lectus aliquam quis urna vel quam sagittis vestibulum.</p>
    </div>
    <ul class="nospace group">
      <li class="one_third first">
        <article><i class="btmspace-30 fa fa-3x fa-laptop"></i>
          <h6 class="heading font-x1">Integer sodales odio</h6>
          <p class="btmspace-30">Mattis erat pede at magna maecenas ut eros vel tortor viverra auctor phasellus ligula lobortis vivamus ultricies [&hellip;]</p>
          <footer><a class="btn" href="#">Read More &rsaquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><i class="btmspace-30 fa fa-3x fa-lastfm"></i>
          <h6 class="heading font-x1">Ultrices feugiat ligula</h6>
          <p class="btmspace-30">Massa eget sapienfusce ornare suscipit massa duis sed magnacras condimentum tempor tortor integer id urna [&hellip;]</p>
          <footer><a class="btn" href="#">Read More &rsaquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><i class="btmspace-30 fa fa-3x fa-codiepie"></i>
          <h6 class="heading font-x1">Augue tempor orci</h6>
          <p class="btmspace-30">Eros mauris cursus quam consectetuer tincidunt est mi bibendum risus nec rutrum mi justo sit amet mi suspendisse [&hellip;]</p>
          <footer><a class="btn" href="#">Read More &rsaquo;</a></footer>
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
    <div class="sectiontitle">
      <h6 class="heading">Ligula non elementum</h6>
      <p>Ultricies justo urna egestas metus ut ornare leo augue pharetra.</p>
    </div>
    <ul id="stats" class="nospace group">
      <li class="one_quarter first"><a href="#"><i class="fa fa-3x fa-sellsy"></i></a>
        <p>Risusmorbi</p>
        <p>12345</p>
      </li>
      <li class="one_quarter"><a href="#"><i class="fa fa-3x fa-contao"></i></a>
        <p>Tincidunt</p>
        <p>12345</p>
      </li>
      <li class="one_quarter"><a href="#"><i class="fa fa-3x fa-signing"></i></a>
        <p>Vestibulum</p>
        <p>12345</p>
      </li>
      <li class="one_quarter"><a href="#"><i class="fa fa-3x fa-envira"></i></a>
        <p>Scelerisque</p>
        <p>12345</p>
      </li>
    </ul>
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
      <h6 class="heading">Massa ac rutrum orci augue</h6>
      <p>Iaculis nibh quis porta nunc nisi suscipit leo vestibulum molestie.</p>
    </div>
    <ul class="nospace group figures latest">
      <li class="one_third first">
        <figure><img src="images/320x320.png" alt="">
          <figcaption><a href="#">Felis fringilla</a>
            <time datetime="2045-04-03"><strong>03</strong> Apr</time>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/320x320.png" alt="">
          <figcaption><a href="#">Ligula vel blandit</a>
            <time datetime="2045-03-12"><strong>12</strong> Mar</time>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/320x320.png" alt="">
          <figcaption><a href="#">Lobortis dui leo</a>
            <time datetime="2045-02-21"><strong>21</strong> Feb</time>
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
<script src="{{ url('/js/jquery.min.js') }}"></script>
<script src="{{ url('/js/jquery.backtotop.js') }}"></script>
<script src="{{ url('/js/jquery.mobilemenu.js') }}"></script>
<script src="{{ url('/js/jquery.flexslider-min.js') }}"></script>
</body>
</html>