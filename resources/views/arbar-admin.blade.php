<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>ARISEN Admin - Arbar</title>
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
          <div class="but-add-adm" onclick="addArbar()">
              <a href="#" >
                  <i class="button-cre">Tambah ARBAR</i>
              </a>
          </div>
          <div class="scrollable">
            <table>
              <thead>
                <tr>
                  <th class="th-id">ID</th>
                  <th class="th-title">Judul ARBAR</th>
                  <th class="th-title">Sponsor ARBAR</th>
                  <th class="th-nominal">Email Sponsor</th>
                  <th class="th-nominal">Batas Pemain</th>
                  <th class="th-nominal">Jumlah</th>
                  <th class="th-nominal">Masa Berlaku</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                  <tr>
                    <td><a href="#" onclick="varbar({{$item->id}})">#{{$item->generate_id}}  </a></td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->sponsor}}</td>
                    <td>{{$item->sponsor_email}}</td>
                    <td>{{$item->total_player}} Pemain</td>
                    <td>{{$item->coupon-$item->joined_player}}/{{$item->coupon}}</td>
                    <td>12 NOV 2018</td>
                  </tr> 
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div id="form-view-arbar">
          </div>
          <div class="view-img-adm"> 
            <form action="#">
                <div class="contactForm-view-img"></div>

                <input class="formBtn" type="submit" value="TUTUP"/>
            </form>
          </div>
          <div class="form-ubah-arbar2">
          </div>

          <div class="form-add-arbar">

                <h1>Tambah ARBAR</h1>
                
                <form action="add-arbar" method="POST" enctype="multipart/form-data">
                      <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <div class="form-add-arbar2">
                          <input class="fld-tambah-arbar" type="text" name="title" placeholder="Judul ARBAR">
                          <input class="fld-tambah-arbar" type="text" name="sponsor" placeholder="Sponsor ARBAR">
                          <input class="fld-tambah-arbar" type="text" name="sponsor_address" placeholder="Alamat Sponsor ARBAR">
                          <input class="fld-tambah-arbar" type="email" name="sponsor_email" placeholder="Email Sponsor ARBAR">
                          <input class="fld-tambah-arbar" type="text" name="contact_sponsor" placeholder="Kontak Sponsor ARBAR">

                          <div class="add-arbar">
                            <div class="inf-user2">Pemain</div>
                            <input  type="number" name="total_player" min="2" max="100" step="1" data-number-stepfactor="1" placeholder="Batas Pemain">
                          </div>
                          
                          <div class="add-arbar">
                              <div class="inf-user2">Kupon</div>
                              <input  type="number" name="coupon" min="2" max="1000" step="1" data-number-stepfactor="1" placeholder="Jumlah Kupon">
                            </div>

                          <div class="form-tambah-arbar3">
                            <label>Gambar Promo</label> 
                            <input type="file" name="fileToUploadPromo" id="fileToUpload" class="chs-file" accept="image/*">
                          </div>
                          <p>Berkas Maximal 5 MB.</p>
                          <div class="form-tambah-arbar3">
                            <label>Gambar Kupon</label> 
                            <input type="file" name="fileToUploadCoupon" id="fileToUpload" class="chs-file" accept="image/*">
                          </div>
                          <p>Berkas Maximal 5 MB.</p>
                        </div>
                        <div class="btn-arbar-div">
                          <input class="btn-arbar" type="submit" value="TAMBAH ARBAR"/>
                          <button class="btn-arbar" type=button onclick="closeArbar()">TUTUP</button>
                        </div>

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
    var container = $("#form-view-arbar");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
        container.empty();
    }
  });

function varbar(id){
  $.ajax({
        type: "GET",
        url: "/admin-get-arbar/"+id,
        success: function(msg){
          var data = msg.data;
          $('#form-view-arbar').append(
            '<h1>'+data.title+'</h1>'+
                    '<form action="#">'+
                      '<div class="img-promo-arbar">'+
                        '<a href="#" onclick="viewDetail()">'+
                            '<img style="height:100%" src="uploads/' + data.promo_image_path + '" />'+
                            '<i class="fa fa-search-plus fa-fw" ></i>'+
                        '</a>'+
                      '</div>'+
                      '<div class="img-kupon-arbar">'+
                          '<a href="#" onclick="viewDetail()">'+
                              '<img style="height:100%" src="uploads/' + data.coupon_image_path + '" />'+
                              '<i class="fa fa-search-plus fa-fw" ></i>'+
                          '</a>'+
                        '</div>'+
                        '<div class="inf-form-adm">'+
                            '#'+data.generate_id+'<br>'+
                            data.sponsor+'<br>'+
                            data.sponsor_email+'<br>'+
                            data.sponsor_address+'<br>'+
                            data.contact_sponsor+'<br>'+
                            data.total_player+' Pemain<br>'+
                            data.joined_player+'/'+data.coupon+'<br>'+
                            '12 NOV 2018<br>'+
                        '</div>'+
                      '<input class="formBtn" type="submit" value="UBAH" onclick="ubahArbar('+id+')"/>'+
                      '<a class="formBtn" href="admin-delete-arbar/'+id+'">HAPUS</a>'+
                      '<input class="formBtn" type="submit" value="TUTUP"/>'+
                    '</form>'
          );
        }
      });
  $('#form-view-arbar').fadeToggle();
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
    var container = $(".form-ubah-arbar2");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
        container.empty();
    }
  });

function ubahArbar(id){
  $.ajax({
        type: "GET",
        url: "/admin-get-arbar/"+id,
        success: function(msg){
          var data = msg.data;
          $('.form-ubah-arbar2').append(
            '<h1>Ubah ARBAR</h1>'+
            '<form action="arbar-admin-update/'+id+'" method="POST" enctype="multipart/form-data">'+
            '<input name="_token" type="hidden" value="{{ csrf_token() }}"/>'+
              '<div class="form-add-arbar2">'+
                '<input class="fld-tambah-arbar" type="text" name="title" value="'+data.title+'">'+
                '<input class="fld-tambah-arbar" type="text" name="sponsor" value="'+data.sponsor+'">'+
                '<input class="fld-tambah-arbar" type="text" name="sponsor_address" value="'+data.sponsor_address+'">'+
                '<input class="fld-tambah-arbar" type="email" name="sponsor_email" value="'+data.sponsor_email+'">'+
                '<input class="fld-tambah-arbar" type="text" name="contact_sponsor" value="'+data.contact_sponsor+'">'+
                '<div class="add-arbar">'+
                  '<div class="inf-user2">Pemain</div>'+
                  '<input  type="number" name="total_player" min="2" max="100" step="1" data-number-stepfactor="1" value="'+data.total_player+'">'+
                '</div>'+
                '<div class="add-arbar">'+
                    '<div class="inf-user2">Kupon</div>'+
                    '<input  type="number" name="coupon" min="2" max="1000" step="1" data-number-stepfactor="1" value="'+data.coupon+'">'+
                  '</div>'+
                '<div class="form-tambah-arbar3">'+
                  '<label>Gambar Promo</label> '+
                  '<input type="file" name="fileToUploadPromo" id="fileToUpload" class="chs-file">'+
                '</div>'+
                '<p>Berkas Maximal 5 MB.</p>'+
                '<div class="form-tambah-arbar3">'+
                    '<label>Gambar Kupon</label> '+
                    '<input type="file" name="fileToUploadCoupon" id="fileToUpload" class="chs-file">'+
                '</div>'+
                '<p>Berkas Maximal 5 MB.</p>'+
              '</div>'+
              '<div class="btn-arbar-div">'+
                '<input class="btn-arbar" type="submit" value="UBAH ARBAR"/>'+
                '<button class="btn-arbar" type=button>TUTUP</button>'+
              '</div>'+
            '</form>'
          );
        }
      });
  $('.form-ubah-arbar2').fadeToggle();
}

$(document).mouseup(function (e) {
    var container = $(".form-add-arbar");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function addArbar(){
  $('.form-add-arbar').fadeToggle();
}

function closeArbar(){
  $('.form-add-arbar').fadeToggle();
}

    </script>

  </body>
</html>