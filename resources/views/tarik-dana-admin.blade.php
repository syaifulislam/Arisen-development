<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>ARISEN Admin - Tarik Dana</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

<link rel="stylesheet" href="{{ url('/css/font-awesome.min.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ url('/css/layout.css') }}" media="all" type="text/css" />



    <link href="css/templatemo-style.css" rel="stylesheet">
    

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <a href="../view/home-admin.html"><h1>ARISEN Admin</h1></a>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->

        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="#" ><i class="fa fa-home fa-fw"></i>Halaman Utama</a></li>
            <li><a href="data-visualization.html"><i class="fa fa-check-circle fa-fw"></i>Aktivasi Akun</a></li>
            <li><a href="maps.html" class="active"><i class="fa fa-bank fa-fw"></i>Tarik Dana</a></li>
            <li><a href="manage-users.html"><i class="fa fa-money fa-fw"></i>Setor Dana</a></li>
            <li><a href="preferences.html"><i class="fa fa-users fa-fw"></i>ARBAR</a></li>
            <li><a href="preferences.html"><i class="fa fa-history fa-fw"></i>Riwayat Keuangan</a></li>
            <li><a href="login.html"><i class="fa fa-eject fa-fw"></i>Keluar</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><i class="fa fa-user-circle fa-fw"></i> Admin One</li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
          </div>

          <div class="ctn-dsh-adm">
            <div class="scrollable">
              <table>
                <thead>
                  <tr>
                    <th class="th-id">ID</th>
                    <th class="th-title">Tanggal</th>
                    <th class="th-nominal">Saldo</th>
                    <th class="th-undian">Status</th>

                  </tr>
                </thead>
                <tbody>
                    <tr >

                      <td><a href="#" onclick="acc()">#1231242  </a></td>

                      <td>14 November 2018</td>
                      <td style="color:green;">Rp.5.000.000,00</td>
                      <td style="color: red;">Belum di Proses</td>

                    </tr>  
                </tbody>
              </table>
          </div>

          
          </div>
          <div id="form-view-trk">

            <h1>Konfirmasi Tarik Dana</h1>
            
            <form action="#">
              <div class="form-acc-trk">
                #1321351<br>
                SIXIOT<br>
                52147865<br>
                Yudha Darmawan Gustavianto<br>
                BCA
                <div class="form-acc-trk-upl">
                  <label>Unggah Bukti Transfer</label> 
                  <input type="file" name="fileToUpload" id="fileToUpload" class="chs-file">
                </div>
                <p>Berkas Maximal 5 MB.</p>
              </div>
              <input class="formBtn" type="submit" value="KONFIRMASI"/>
              <input class="formBtn" type="submit" value="TUTUP"/>
            </form>
          </div>

          <footer class="text-right">
            <p>Copyright &copy; 2018 ARISEN</a></p>
          </footer>         
        </div>
      </div>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.backtotop.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script>
$(document).mouseup(function (e) {
    var container = $("#form-view-trk");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function acc(){
  $('#form-view-trk').fadeToggle();

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