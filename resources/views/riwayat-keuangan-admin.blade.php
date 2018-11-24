<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>ARISEN Admin - Riwayat Keuangan</title>
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
                <form action="download-xls" method="POST">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <select name="period" class="arisan-per2">
                                <option value="">---------------Pilih Laporan---------------</option>
                                <option value="mingguan">Mingguan</option>
                                <option value="bulanan">Bulanan</option>
                                <option value="tahunan">Tahunan</option>
                         </select>
                         <div class="but-add-adm">
                                <a href="#" >
                                    <input type="submit" class="button-cre" value="Unduh Laporan">
                                </a>
                            </div>
                </form>
                @endif
            <div class="scrollable">
              <table>
                <thead>
                  <tr>
                    <th class="th-id">ID</th>
                    <th class="th-title">Tanggal</th>
                    <th class="th-nominal">Saldo</th>
                    <th class="th-undian">Keterangan</th>
                    <th class="th-undian">Status</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $value)
                        <tr>
                            <td><a href="#" onclick="typePassword({{$value->id}})">#{{$value->user->user_code}}  </a></td>
                            <td>{{Carbon\Carbon::parse($value->created_at)->format('d M Y')}}</td>
                            @if ($value->payment_type_id == 1)
                                <td style="color:red;">-{{ Money::IDR($value->request_nominal,true)->format() }}</td>                                
                            @else
                                <td style="color:green;">+{{ Money::IDR($value->request_nominal,true)->format() }}</td>                                
                            @endif
                            <td>{{$value->payment_type->name}}</td>
                            <td>{{$value->status}}</td>
                        </tr> 
                    @endforeach
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
    var container2 = $("#contactForm-view");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.empty();
        container2.empty();
        container.fadeOut();
    }
  });

function typePassword(id){
    $.ajax({
        type: "GET",
        url: "/admin-get-keuangan/"+id,
        success: function(msg){
          console.log(msg)
          if(msg.data.payment_type_id == 1){
            var rupiah = '';		
            var angkarev = msg.data.request_nominal.toString().split('').reverse().join('');
            for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
            var nominal = 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
            $('#contactForm-view-fnc').append(
                '<h1>Konfirmasi Tarik Dana</h1>'+
                    '<form action="#">'+
                        '<div  class="form-aktifkan-akun">'+
                            '<img style="height:100%" src="uploads/' + msg.data.image_path_confirm + '" />'+
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
                        '<input class="formBtn" onclick="closeBtn()" type="submit" value="TUTUP"/>'+
                    '</form>'
            );
            $("#contactForm-view").append(
                '<form action="#">'+
                            '<div></div><img style="height:100%" src="uploads/' + msg.data.image_path_confirm + '" />'+
                            '<input class="formBtn" type="submit" value="TUTUP"/>'+
                        '</form>'
            );
          }else if(msg.data.payment_type_id == 2){
            var rupiah = '';		
            var angkarev = msg.data.request_nominal.toString().split('').reverse().join('');
            for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
            var nominal = 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
            $('#contactForm-view-fnc').append(
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
                        '<input class="formBtn" onclick="closeBtn()" type="submit" value="TUTUP"/>'+
                    '</form>'
            );
            $("#contactForm-view").append(
                '<form action="#">'+
                            '<div></div><img style="height:100%" src="uploads/' + msg.data.image_path + '" />'+
                            '<input class="formBtn" type="submit" value="TUTUP"/>'+
                        '</form>'
            );
          }else{
            $('#contactForm-view-fnc').append(
                '<h1>Menang Undian</h1>'+
                    '<form action="#">'+
                        nominal+
                        '<div style=" width: 100%; height: auto; margin-bottom: 10px;">#'+msg.data.user.user_code+
                        '<br>'+msg.data.user.first_name+' '+msg.data.user.last_name+
                        '<br>'+msg.data.user_detail.bank_account_number+
                        '<br>'+msg.data.user_detail.bank_account_office.toUpperCase()+
                        '</div>'+
                        '<input class="formBtn" onclick="closeBtn()" type="submit" value="TUTUP"/>'+
                    '</form>'
            );
          }
          
        }
      });
  $('#contactForm-view-fnc').fadeToggle();

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
function closeBtn(){
    var container = $("#contactForm-view-fnc");
  container.fadeOut();
}
    </script>

  </body>
</html>