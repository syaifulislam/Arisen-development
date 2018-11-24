<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>ARISEN Admin</title>
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
                  @if (Sentinel::getUser()->is_super_admin)
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
                              @foreach ($data as $value)
                                  <tr>
                                  <td><a href="#" onclick="acc({{$value->id}})">#{{$value->user_code}}</a></td>
                                  <td>{{$value->first_name}} {{$value->last_name}}</td>
                                  <td>{{$value->email}}</td>
                                </tr> 
                              @endforeach
                          </tbody>
                        </table>
                    </div>
                  @endif
            <h1 style="color: gold;">WELCOME , {{Sentinel::getUser()->first_name}} {{Sentinel::getUser()->last_name}}</h1>
          </div>
          @include('footer-admin')        
        </div>
      </div>
    </div>
    {{-- view detail admin --}}
    <div id="form-view-adm">
    </div>
    {{-- end --}}

    {{-- change admin --}}
    <div class="form-ubah-adm">
    </div>
    {{-- enc --}}
          <div class="view-img-adm"> 
              <form action="#">
                  <div class="contactForm-view-img"></div>
  
                  <input class="formBtn" type="submit" value="TUTUP"/>
              </form>
            </div>

          <div class="form-add-adm">

                <h1>Tambah Admin</h1>
                
                <form action="/addAdmin" method="POST" enctype="multipart/form-data">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <div class="form-ubah-adm2">
                            <input class="fld-ubah-adm" type="text" name="first_name" placeholder="Nama Depan Admin">
                            <input class="fld-ubah-adm" type="text" name="last_name" placeholder="Nama Belakang Admin">
                            <input class="fld-ubah-adm" type="text" name="username" placeholder="Nama Pengguna Admin">
                            <input class="fld-ubah-adm" type="email" name="email" placeholder="Email Admin">
                            <input class="fld-ubah-adm" type="password" name="password" placeholder="Password Admin">
                            <input class="fld-ubah-adm" type="password" name="passwordConfirm" placeholder="Konfirmasi Password Admin">
                          
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

  </body>
  <script src="js/jquery.min.js"></script>
    <script src="js/jquery.backtotop.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script >
    $(document).mouseup(function (e) {
    var container = $("#form-view-adm");
    var container2 = $(".view-img-adm");


    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.empty();
        container2.empty();
        container.fadeOut();
    }
  });

function acc(id){
  $.ajax({
        type: "GET",
        url: "/admin-get-data/"+id,
        success: function(msg){
          var data = msg.data;
          $('#form-view-adm').append(
            '<h1>Admin One</h1>'+
            '<form action="#">'+
          '<div class="img-adm">'+
            '<a href="#" onclick="viewDetail()">'+
                '<img style="height:100%" src="uploads/' + data.admin_images.image_path + '" />'+
                '<i class="fa fa-search-plus fa-fw" ></i>'+
            '</a>'+
          '</div>'+
            '<div class="inf-form-adm">'+
                '#'+data.user_code+'<br>'+
                data.first_name+' '+data.last_name+'<br>'+
                data.email+
            '</div>'+
          '<input class="formBtn" type="submit" value="UBAH" onclick=" ubah('+data.id+')"/>'+
          '<input class="formBtn" type="submit" value="HAPUS"/>'+
          '<input class="formBtn" type="submit" value="TUTUP"/>'+
        '</form>'
          );
          $(".view-img-adm").append(
            '<form action="#">'+
                        '<div></div><img style="height:100%" src="uploads/' + data.admin_images.image_path + '" />'+
                        '<input class="formBtn" type="submit" value="TUTUP"/>'+
                    '</form>'
          );
        }
      });
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
      container.empty();
        container.fadeOut();
    }
  });

function ubah(id){
  $.ajax({
        type: "GET",
        url: "/admin-get-data/"+id,
        success: function(msg){
          var data = msg.data;
          console.log(data)
          $('.form-ubah-adm').append(
            '<h1>Ubah Admin</h1>'+
                '<form action="changeAdmin/'+id+'" method="POST" enctype="multipart/form-data">'+
                        '<div class="form-ubah-adm2">'+
                          '<input name="_token" type="hidden" value="{{ csrf_token() }}"/>'+
                          '<input class="fld-ubah-adm" type="text" name="first_name" value="'+data.first_name+'">'+
                          '<input class="fld-ubah-adm" type="text" name="last_name" value="'+data.last_name+'">'+
                          '<input class="fld-ubah-adm" type="text" name="username" value="'+data.username+'">'+
                          '<input class="fld-ubah-adm" type="email" name="email" value="'+data.email+'">'+
                          '<input class="fld-ubah-adm" type="password" name="password" placeholder="Password Admin">'+
                          '<input class="fld-ubah-adm" type="password" name="passwordConfirm" placeholder="Konfirmasi Password Admin">'+
                          '<div class="form-ubah-adm3">'+
                            '<label>Ubah Foto Admin</label>'+
                            '<input type="file" name="fileToUpload" id="fileToUpload" class="chs-file">'+
                          '</div>'+
                          '<p>Berkas Maximal 5 MB.</p>'+
                        '</div>'+
                        '<input class="formBtn" type="submit" value="UBAH"/>'+
                        '<input class="formBtn" type="button" value="TUTUP"/>'+
                      '</form>'
          );
        }
      });
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
</html>
    