<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>ARISEN Super Admin - Admin</title>
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
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><i class="fa fa-user-circle fa-fw"></i> Super Admin One</li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
          </div>

          <div class="ctn-dsh-adm">
                <div class="but-add-adm" onclick="addAdm()">
                    <a href="#" >
                        <i class="button-cre">Tambah Admin</i>
                    </a>
                </div>
            <div class="scrollable">
                <table>
                  <thead>
                    <tr>
                      <th class="th-id">ID</th>
                      <th class="th-title">Nama Admin</th>
                      <th class="th-nominal">Email</th>
  
                    </tr>
                  </thead>
                  <tbody>
                      <tr >
  
                        <td><a href="#" onclick="acc()">#1231242  </a></td>
  
                        <td>Admin One</td>
                        <td>admin-one@gmail.com</td>
  
                      </tr>  
                  </tbody>
                </table>
            </div>
          </div>
          <div id="form-view-adm">

            <h1>Admin One</h1>
            
            <form action="#">
              <div class="img-adm">
                <a href="#" onclick="viewDetail()">
                    <i class="fa fa-search-plus fa-fw" ></i>
                </a>
              </div>
                <div class="inf-form-adm">
                    #1321351<br>
                    Admin One<br>
                    adminone@gmail.com
                </div>
              
              <input class="formBtn" type="submit" value="UBAH" onclick=" ubah()"/>
              <input class="formBtn" type="submit" value="HAPUS"/>
              <input class="formBtn" type="submit" value="TUTUP"/>
            </form>
          </div>
          <div class="view-img-adm"> 
            <form action="#">
                <div class="contactForm-view-img"></div>

                <input class="formBtn" type="submit" value="TUTUP"/>
            </form>
          </div>
          <div class="form-ubah-adm">

                <h1>Ubah Admin</h1>
                
                <form action="#">
                        <div class="form-ubah-adm2">
                          <input class="fld-ubah-adm" type="text" name="" placeholder="Admin One">
                          <input class="fld-ubah-adm" type="text" name="" placeholder="adminone@gmail.com">
                          
                          <div class="form-ubah-adm3">
                            <label>Ubah Foto Admin</label> 
                            <input type="file" name="fileToUpload" id="fileToUpload" class="chs-file">
                          </div>
                          <p>Berkas Maximal 5 MB.</p>
                        </div>
                        <input class="formBtn" type="submit" value="UBAH"/>
                        <input class="formBtn" type="submit" value="TUTUP"/>
                      </form>
          </div>

          <div class="form-add-adm">

                <h1>Tambah Admin</h1>
                
                <form action="/addAdmin" method="POST">
                      <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <div class="form-ubah-adm2">
                          <input class="fld-ubah-adm" type="text" name="first_name" placeholder="Nama Depan Admin">
                          <input class="fld-ubah-adm" type="text" name="last_name" placeholder="Nama Belakang Admin">
                          <input class="fld-ubah-adm" type="email" name="email" placeholder="Email Admin">
                          
                          <div class="form-ubah-adm3">
                            <label>Foto Admin</label> 
                            <input type="file" name="fileToUpload" id="fileToUpload" class="chs-file">
                          </div>
                          <p>Berkas Maximal 5 MB.</p>
                        </div>
                        <input class="formBtn" type="submit" value="TAMBAH"/>
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
    var container = $("#form-view-adm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function acc(){
  $('#form-view-adm').fadeToggle();

}

$(document).mouseup(function (e) {
    var container = $(".view-img-adm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function viewDetail(){
  $('.view-img-adm').fadeToggle();

}

$(document).mouseup(function (e) {
    var container = $(".form-ubah-adm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function ubah(){
  $('.form-ubah-adm').fadeToggle();

}

$(document).mouseup(function (e) {
    var container = $(".form-add-adm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function addAdm(){
  $('.form-add-adm').fadeToggle();

}

    </script>

  </body>
</html>