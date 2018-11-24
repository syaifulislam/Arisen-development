<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>ARISEN Admin - Setor Dana</title>
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
                    <th class="th-title">Tanggal</th>
                    <th class="th-nominal">Saldo</th>
                    <th class="th-undian">Status</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $value)
                    <tr>
                      @if ($value->status == 'Sudah di Proses')
                        <td>#{{$value->user->user_code}}</td>                          
                      @else
                        <td><a href="#" onclick="acc({{$value->id}})">#{{$value->user->user_code}}</a></td>                          
                      @endif
                      <td>{{Carbon\Carbon::parse($value->created_at)->format('d M Y')}}</td>
                      <td style="color:green;">{{ Money::IDR($value->request_nominal,true)->format() }}</td>
                      @if ($value->status == 'Pending')
                        <?php $styleInit = 'color: red;'?>                      
                      @elseif ($value->status == 'Gagal')
                        <?php $styleInit = 'color: blue;'?> 
                      @else
                        <?php $styleInit = 'color: green;'?>                  
                      @endif
                      <td style="{{$styleInit}}">{{$value->status}}</td>
                    </tr> 
                    @endforeach
                </tbody>
              </table>
          </div>

          
          </div>
          <div id="form-view-str">
          </div>
          <div id="contactForm-view">
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
    var container = $("#form-view-str");
    var container2 = $("#contactForm-view");

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
        url: "/admin-get-setor/"+id,
        success: function(msg){
          var rupiah = '';		
          var angkarev = msg.data.request_nominal.toString().split('').reverse().join('');
          for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
          var nominal = 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
          $('#form-view-str').append(
            '<h1>Konfirmasi Setor Dana</h1>'+
                '<form action="#">'+
                    '<div  class="form-aktifkan-akun">'+
                        '<img style="height:100%" src="uploads/' + msg.data.image_path + '" />'+
                        '<a href="#" onclick="viewDetail()">'+
                            '<i class="fa fa-search-plus fa-fw" ></i>'+
                        '</a>'+
                   '</div>'+
                   nominal+
                    '<div style=" width: 100%; height: auto; margin-bottom: 10px;">#'+msg.data.user.user_code+
                    '<br>'+msg.data.user.first_name+' '+msg.data.user.last_name+
                    '<br>'+msg.data.user_detail.bank_account_number+
                    '<br>'+msg.data.user_detail.bank_account_office.toUpperCase()+
                    '</div>'+
                    '<a href="/setor/'+id+'/Sudah di Proses"><p class="formBtn">KONFIRMASI</p></a>'+
                    '<a href="/setor/'+id+'/Gagal"><p class="formBtn">TOLAK</p></a>'+
                    '<input class="formBtn" type="submit" value="TUTUP"/>'+
                '</form>'
          );
          $("#contactForm-view").append(
            '<form action="#">'+
                        '<div></div><img style="height:100%" src="uploads/' + msg.data.image_path + '" />'+
                        '<input class="formBtn" type="submit" value="TUTUP"/>'+
                    '</form>'
          );
        }
      });
  $('#form-view-str').fadeToggle();
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