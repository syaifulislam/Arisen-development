<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>ARISEN Admin - Laporan Keuangan</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

<link rel="stylesheet" href="{{ url('/css/font-awesome.min.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ url('/css/layout.css') }}" media="all" type="text/css" />



    <link href="css/templatemo-style.css" rel="stylesheet">
    

  </head>
  <body class="body-admin">  
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
                
                    <form action="">
                            <select name="period" class="arisan-per2">
                                    <option value="">---------------Pilih Laporan---------------</option>
                                    <option value="mingguan">Mingguan</option>
                                    <option value="bulanan">Bulanan</option>
                                    <option value="tahunan">Tahunan</option>
                             </select>
                    </form>
                    <div class="but-add-adm">
                            <a href="#" >
                                <i class="button-cre">Unduh Laporan</i>
                            </a>
                        </div>
            <div class="scrollable">
              <table>
                <thead>
                  <tr>
                    <th class="th-id">ID</th>
                    <th class="th-title">Tanggal</th>
                    <th class="th-nominal">Saldo</th>
                    <th class="th-undian">Keterangan</th>

                  </tr>
                </thead>
                <tbody>
                    <tr >

                      <td><a href="#" onclick="typePassword()">#1231242  </a></td>

                      <td>14 November 2018</td>
                      <td style="color:green;">+Rp.5.000.000,00</td>
                      <td>Setor Dana</td>

                    </tr> 
                    <tr>
                      <td><a href="#" onclick="typePassword()">#1231242  </a></td>

                      <td>13 November 2018</td>
                      <td style="color: red;">-Rp.5.000.000,00</td>
                      <td>Tarik Dana</td>

                    </tr> 
                </tbody>
              </table>
          </div>

          <div id="contactForm-view-fnc">

            <h1>Setor Dana</h1>
            
            <form action="#">
                <div  class="form-aktifkan-akun" >
                    <a href="#" onclick="viewDetail()">
                        <i class="fa fa-search-plus fa-fw" ></i>
                    </a>
                </div>
                <div style=" width: 100%; height: auto; margin-bottom: 10px;">
                    #1321351<br>
                    SIXIOT<br>
                    52147865<br>
                    Yudha Darmawan Gustavianto<br>
                    BCA
                </div>
                <input class="formBtn" type="submit" value="TUTUP"/>
            </form>
        </div>

        <div id="contactForm-view-fnc2">

          <h1>Tarik Dana</h1>
          
          <form action="#">
              <div  class="form-aktifkan-akun" >
                  <a href="#" onclick="viewDetail()">
                      <i class="fa fa-search-plus fa-fw" ></i>
                  </a>
              </div>
              <div style=" width: 100%; height: auto; margin-bottom: 10px;">
                  #1321351<br>
                  SIXIOT<br>
                  52147865<br>
                  Yudha Darmawan Gustavianto<br>
                  @can('update', Model::class)
                    
                  @endcan
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
    var container = $("#contactForm-view-fnc");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function typePassword(){
  $('#contactForm-view-fnc').fadeToggle();

}

$(document).mouseup(function (e) {
    var container = $("#contactForm-view-fnc2");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function typePassword(){
  $('#contactForm-view-fnc2').fadeToggle();

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