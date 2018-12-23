<!DOCTYPE html>

<html lang="">
<head>
<title>ARISEN-ARBAR</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="{{ url('/css/layout.css') }}" media="screen" type="text/css" />

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    @include('header-name')
    <!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  {{-- <header id="header" class="hoc clear" style="background-image:url('images/logo/logo-header.png'); background-repeat: no-repeat; background-position: center; margin-top: 20px; margin-bottom: 20px;"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">

    </div>
    <div id="quickinfo" class="fl_right">
    </div>
    <!-- ################################################################################################ -->
  </header> --}}
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
    <h6 class="heading">ARISAN BARENG</h6>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3" @if (sizeof($data) <= 4)style="height:700px"@endif>
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      
      <div id="gallery">
        <figure >
          <header class="heading">Promo ARBAR</header>
          <ul class="nospace clear figures">
                  @for ($i = 0; $i < sizeof($data); $i++)
                    @if ($i%4 == 0)
                      <li class="one_quarter first">
                        <figure>
                          <a onclick="varbar({{$data[$i]->id}})">
                            <img src="uploads/{{$data[$i]->promo_image_path}}" alt="">
                          </a>
                          <figcaption>
                            <figcaption>
                            <time datetime="2045-04-03"><strong>{{$data[$i]->coupon - $data[$i]->joined_player}}/{{$data[$i]->coupon}}</strong></time>
                          </figcaption>
                        </figure>
                    </li>
                    @else
                      <li class="one_quarter">
                        <figure>
                          <a onclick="varbar({{$data[$i]->id}})">
                            <img src="uploads/{{$data[$i]->promo_image_path}}" alt="">
                          </a>
                          <figcaption>
                            <figcaption>
                            <time datetime="2045-04-03"><strong>{{$data[$i]->joined_player}}/{{$data[$i]->coupon}}</strong></time>
                          </figcaption>
                        </figure>
                    </li>
                    @endif                      
                  @endfor
          </ul>

        </figure>
      </div>

      <div id="view-arbar-user">
        </div>
        
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->

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
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script>
  $(document).ready(function(){
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  });
$(document).mouseup(function (e) {
    var container = $("#view-arbar-user");

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
        url: "/arbar-detail/"+id,
        success: function(msg){
          var data = msg.data;
          var room = msg.dataRoom;
          $('#view-arbar-user').append(
            '<h1>'+data.title+'</h1>'+
          '<form action="ambil-arbar/'+id+'" method="POST">'+
            '<input name="_token" type="hidden" value="{{ csrf_token() }}"/>'+
            '<div class="img-promo-arbar">'+
              '<a onclick="viewDetail()">'+
                  '<img style="height:100%" src="uploads/' + data.promo_image_path + '" />'+
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
              '<select name="room_id" class="inf-form-adm option-ruangan">'+
              '<option value="">Pilih Ruangan</option>'+
              '</select>'+
            '<input class="formBtn" type="submit" value="AMBIL"/>'+
            '<button class="formBtn btn-close-arbar" type="button">TUTUP</button>'+
          '</form>'
          );
          for (var i = 0; i < room.length ; i++) {
            $('.option-ruangan').append('<option value="'+room[i].room.id+'">'+room[i].room.room_name+'</option>');            
          }
        }
      });
  $("#view-arbar-user").fadeToggle();
}

$('.btn-close-arbar').click(function(){
  $("#view-arbar-user").fadeOut();
});
</script>

</body>
</html>