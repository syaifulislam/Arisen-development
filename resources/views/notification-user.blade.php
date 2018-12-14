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
    <h6 class="heading">Notifikasi</h6>
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
    <div class="content-sea">
      <div class="content-sea2">
      </div>
    </div>
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div style="height:auto; width: 100%;">
      <div class="scrollable">
        <table>
            <thead>
              <tr>
                <th class="th-id">Tanggal</th>
                <th class="th-title">Judul Pesan</th>
                <th class="th-undian">Status Pesan</th>

              </tr>
            </thead>
            <tbody>

                    <tr>
                        <td>12 NOV 2018</td>
                        <td><a href="#" onclick="viewNotif()">Penarikan Berhasil</a></td>
                      
                            <td style="color:green">berhasil</td>                                
                        
                    </tr> 

                    <tr>
                        <td>12 NOV 2018</td>
                        <td><a href="#" onclick="viewKupon()">Kupon ARBAR Gratis</a></td>
                      
                            <td style="color:green">Info</td>                                
                        
                    </tr> 

                    <tr>
                        <td>10 NOV 2018</td>
                        <td><a href="#" onclick="viewTolak()">Setor Gagal</a></td>
                      
                            <td style="color:red">ditolak</td>                                
                        
                    </tr> 

                    <tr>
                        <td>10 NOV 2018</td>
                        <td><a href="#" >Aktivasi Gagal</a></td>
                      
                            <td style="color:red">ditolak</td>                                
                        {{-- yang ini ngelink ke detail-akun bang pul --}}
                    </tr> 

            </tbody>
          </table>
      </div>
    </div>

    <div id="info-arbar">
        <h1>Kupon</h1>
        <form action="#">
            <div  class="notif-info" >
                <a href="#" onclick="viewDetail()">
                    <i class="fa fa-search-plus fa-fw" ></i>
                </a>
            </div>
            <div style=" width: 100%; height: auto; margin-bottom: 10px;">
                
            </div>

            <input class="formBtn" type="submit" value="TUTUP"/>
        </form>
    </div>

    <div id="tolak-setor">
        <h1>Data Tidak Sesuai</h1>
        <form action="#">
            <div  class="notif-info" >
                <a href="#" onclick="viewDetail()">
                    <i class="fa fa-search-plus fa-fw" ></i>
                </a>
            </div>
            <div style=" width: 100%; height: auto; margin-bottom: 10px;">
                <input class="fld-tambah-arbar" type="text" name="first_name" placeholder="Masukan Nominal Sesuai dengan Bukti Transfer">
            </div>
            <input class="formBtn" type="submit" value="KOREKSI"/>
            <input class="formBtn" type="submit" value="TUTUP"/>
        </form>
    </div>

      <div id="notif">
        <h1>info</h1>
        <form action="#">
            <div  class="notif-info" >
                <a href="#" onclick="viewDetail()">
                    <i class="fa fa-search-plus fa-fw" ></i>
                </a>
            </div>
            <div style=" width: 100%; height: auto; margin-bottom: 10px;">
                #1321351<br>
                SIXIOT<br>
                52147865<br>
                Yudha Darmawan Gustavianto<br>
                BCA <br>
                Rp. 50.000.000,00
            </div>
            <input class="formBtn" type="submit" value="TUTUP"/>
        </form>
    </div>
    
      <div id="contactForm-view">
        <form action="#">
            <div class="contactForm-view-img"></div>
            <input class="formBtn" type="submit" value="TUTUP"/>
        </form>
      </div>

      </div>

       
    </div>
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
<script>
$(document).mouseup(function (e) {
    var container = $("#info-arbar");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function viewKupon(){
  $('#info-arbar').fadeToggle();

}

function viewTolak(){
  $('#notif').fadeToggle();

}

$(document).mouseup(function (e) {
    var container = $("#notif");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function viewNotif(){
  $('#notif').fadeToggle();

}

function viewTolak(){
  $('#notif').fadeToggle();

}

$(document).mouseup(function (e) {
    var container = $("#tolak-setor");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function viewTolak(){
  $('#tolak-setor').fadeToggle();

}

$(document).mouseup(function (e) {
    var container = $("#contactForm-view");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function viewDetail(){
  $('#contactForm-view').fadeToggle();

}

</script>
</body>
</html>