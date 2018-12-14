<!DOCTYPE html>

<html lang="">
<head>
<title>ARISEN-ARBAR</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="{{ url('/css/layout.css') }}" media="screen" type="text/css" />

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    @include('header-name')
    <!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  {{-- <header id="header" class="hoc clear" style="background-image:url('images/logo/logo-header.png'); background-repeat: no-repeat; background-position: center; margin-top: 20px; margin-bottom: 20px;"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">

    </div>
    <div id="quickinfo" class="fl_right">
    </div>
    <!-- ################################################################################################ -->
  </header> --}}
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    @include('nav-bar')
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/2.png');">
  <section id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->

    <!-- ################################################################################################ -->
    <h6 class="heading">ARISAN BARENG</h6>
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
      
      <div id="gallery">
        <figure >
          <header class="heading">Promo ARBAR</header>
          <ul class="nospace clear figures">
            <li class="one_quarter first ">
                    <figure>
                      <a href="#" onclick="varbar()">
                        <img src="images/arbar/1.png" alt="">
                      </a>
                      <figcaption>
                        <figcaption>
                        <time datetime="2045-04-03"><strong>15/30</strong></time>
                      </figcaption>
                    </figure>
                  </li>
            <li class="one_quarter"><a href="#"><img src="images/gallery/01.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="images/gallery/01.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="images/gallery/01.png" alt=""></a></li>
            <li class="one_quarter first"><a href="#"><img src="images/gallery/01.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="images/gallery/01.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="images/gallery/01.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="images/gallery/01.png" alt=""></a></li>
            <li class="one_quarter first"><a href="#"><img src="images/gallery/01.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="images/gallery/01.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="images/gallery/01.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="images/gallery/01.png" alt=""></a></li>
          </ul>

        </figure>
      </div>

      <div id="view-arbar-user">

          <h1>Gratis 3 Porsi Kentang Goreng</h1>
          
          <form action="my-room">
            <div class="img-promo-arbar">
              <a href="#" onclick="viewDetail()">
                  <i class="fa fa-search-plus fa-fw" ></i>
              </a>
            </div>
              <div class="inf-form-adm">
                  #1321351<br>
                  Gold Drip<br>
                  golddrip@gmail.com<br>
                  Jl.Cempaka Baru VII no.12 , Jakarta-Pusat<br>
                  021-4252587<br>
                  3 Pemain<br>
                  15/30<br>
                  12 NOV 2018<br>
              </div>
            <input class="formBtn" type="submit" value="AMBIL"/>
            <input class="formBtn" type="submit" value="TUTUP" onclick=" close()"/>
          </form>
        </div>
        
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->

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
<script>

$(document).mouseup(function (e) {
    var container = $("#view-arbar-user");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function varbar(){
  $("#view-arbar-user").fadeToggle();

}




</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

</body>
</html>