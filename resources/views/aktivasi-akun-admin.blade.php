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
                      <th class="th-title">Nama</th>
                      <th class="th-nominal">Tanggal</th>
                      <th class="th-undian">Status</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $value)
                      <tr>
                        <td><a href="#" onclick="typePassword()"></a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr> 
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
          <div id="contactForm">
          </div>

            <div id="contactForm-view">
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
    var container = $("#contactForm");
    var container2 = $("#contactForm-view");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.empty();
        container2.empty();
        container.fadeOut();
    }
  });

function typePassword(user_id){
  $.ajax({
        type: "GET",
        url: "/admin-get-user/"+user_id,
        success: function(msg){
          $('#contactForm').append(
            '<h1>Aktivasi Akun</h1>'+
                '<form action="#">'+
                    '<div  class="form-aktifkan-akun">'+
                        '<img style="height:100%" src="uploads/' + msg.data.images_path + '" />'+
                        '<a href="#" onclick="viewDetail()">'+
                            '<i class="fa fa-search-plus fa-fw" ></i>'+
                        '</a>'+
                   '</div>'+
                    '<div style=" width: 100%; height: auto; margin-bottom: 10px;">#'+msg.data.user.user_code+'<br>'+msg.data.user.username+
                    '<br>'+msg.data.bank_account_number+
                    '<br>'+msg.data.bank_account_name+'<br>'+msg.data.bank_account_office.toUpperCase()+
                    '</div>'+
                    '<a href="/activate/'+user_id+'/1"><p class="formBtn">AKTIFKAN</p></a>'+
                    '<a href="/activate/'+user_id+'/2"><p class="formBtn">TOLAK</p></a>'+
                    '<input class="formBtn" type="submit" value="TUTUP"/>'+
                '</form>'
          );
          $("#contactForm-view").append(
            '<form action="#">'+
                        '<div></div><img style="height:100%" src="uploads/' + msg.data.images_path + '" />'+
                        '<input class="formBtn" type="submit" value="TUTUP"/>'+
                    '</form>'
          );
        }
      });
  $('#contactForm').fadeToggle();

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