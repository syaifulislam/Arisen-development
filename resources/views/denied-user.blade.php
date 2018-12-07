<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>ARISEN Admin - Aktivasi Akun</title>
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
        @include('sidebar-admin')
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
          @include('header-admin')
        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
          </div>

          <div class="ctn-dsh-adm">
            <div class="scrollable">
                <table>
                  <thead>
                    <tr>
                      <th class="th-id">ID</th>
                      <th class="th-title">Keterangan</th>
                      <th class="th-nominal">Ruangan</th>
                      <th class="th-undian">Nama</th>

                    </tr>
                  </thead>
                  <tbody>
                   
                      <tr>
                        <td><a href="#" onclick="openForm()">1231245</a></td>
                        <td>Saldo Tidak Sesuai</td>
                        <td>id-ruangan-xyz-1234567</td>
                        <td>Kenyot</td>
                      </tr> 
                   
                  </tbody>
                </table>
            </div>
          </div>
          <div id="contactForm">
          </div>

            <div id="contactForm-view">
            </div>

            <div id="denied-user">
                <h1>info</h1>
                <form action="#">
                        {{-- foto ktp aktifasi user --}}
                    <div  class="notif-info" > 
                        <a href="#" onclick="viewDetail()">
                            <i class="fa fa-search-plus fa-fw" ></i>
                        </a>
                    </div>
                    <div style=" width: 100%; height: auto; margin-bottom: 10px;">
                        #1321351<br>
                        KENYOT<br>
                        52147865<br>
                        Narendra Putra<br>
                        BCA <br>
                        Tunggakan : Rp. 50.000.000,00 <br>
                        id-ruangan-xyz-123
                    </div>
                    <input onclick="formWarning()" class="formBtn" type="submit" value="PERINGATKAN"/>
                    <input class="formBtn" type="submit" value="TUTUP"/>
                </form>
            </div>

            <div id="denied-info">
                    <h1>info</h1>
                    <form action="#">
                            
                        <div style=" width: 100%; height: auto; margin-bottom: 10px;">
                            lakukan langkah 1<br>
                            ayat 1<br>
                            UU ARISEN 2018<br>
                            JUNTO<br>
                            abis itu pukulin
                        </div>
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
    var container = $("#denied-info");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        // container.empty();
        container.fadeOut();
    }
  });

function formWarning(){
  $('#denied-info').fadeToggle();

}

    
    $(document).mouseup(function (e) {
    var container = $("#denied-user");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        // container.empty();
        container.fadeOut();
    }
  });

function openForm(){
  $('#denied-user').fadeToggle();

}


$(document).mouseup(function (e) {
    var container = $("#contactForm-view");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        // container.empty();
        container.fadeOut();
    }
  });

function viewDetail(){
  $('#contactForm-view').fadeToggle();

}
    </script>

  </body>
</html>