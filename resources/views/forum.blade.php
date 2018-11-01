<!DOCTYPE html>

<html lang="">
<head>
<title>ARISEN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="{{ url('/css/layout.css') }}" media="screen" type="text/css" />
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
    <h6 class="heading">FORUM</h6>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th class="th-id">ID</th>
              <th class="th-title">Judul</th>
              <th class="th-nominal">Nominal</th>
              <th class="th-undian">Undian</th>
              <th class="th-user">Pengguna</th>
              <th class="th-status">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="#">#21312</a></td>
              <td>Untuk Nikah</td>
              <td>Rp.5.000.000,00</td>
              <td>Bulanan</td>
              <td>2/10</td>
              <td>lock</td>
            </tr>
            <tr>
              <td><a href="#">#18612</a></td>
              <td>Untuk Nikah 2</td>
              <td>Rp.14.000.000,00</td>
              <td>Bulanan</td>
              <td>7/15</td>
              <td>lock</td>
            </tr>
            <tr>
              <td><a href="#">#13548</a></td>
              <td>Untuk Nikah 3</td>
              <td>Rp.23.000.000,00</td>
              <td>Bulanan</td>
              <td>6/20</td>
              <td></td>
            </tr>
            <tr>
              <td><a href="#">#15487</a></td>
              <td>Untuk Nikah 4</td>
              <td>Rp.55.000.000,00</td>
              <td>Bulanan</td>
              <td>1/10</td>
              <td>lock</td>
            </tr>
            <tr>
              <td><a href="#">#13518</a></td>
              <td>Untuk Nikah 5</td>
              <td>Rp.32.000.000,00</td>
              <td>Bulanan</td>
              <td>2/5</td>
              <td></td>
            </tr>
          </tbody>
        </table>
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
<div class="wrapper row4 bgded overlay" style="background-image:url('images/backgrounds/03.png');">
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
        <figure><a href="#"><img class="borderedbox inspace-10 btmspace-15" src="images/320x168.png" alt=""></a>
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
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>