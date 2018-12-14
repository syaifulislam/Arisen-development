<!DOCTYPE html>

<html lang="">
<head>
<title>ARISEN-Forum</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="{{ url('/css/layout.css') }}" media="screen" type="text/css" />
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
@include('header-name')
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    @include('nav-bar')
    <!-- ################################################################################################ -->
  </nav>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/2.png');">
  <section id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
   
    <!-- ################################################################################################ -->
    <h6 class="heading">FORUM</h6>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content-sea">
      <div class="content-sea2">
        <form class="example" action="#" >
        <input type="text" placeholder="Cari Ruangan" name="search2" value="{{$search}}">
          <button type="submit"><i class="">Search</i></button>
        </form>
      </div>
      <div class="content-cre">
            <a href="/create-room"><i class="button-cre">Buat Ruangan</i></a>
      </div>
    </div>
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th class="th-id">ID</th>
              <th class="th-title">Judul</th>
              <th class="th-nominal">Nominal</th>
              <th class="th-undian">Undian</th>
              <th class="th-user">Pengguna</th>
              <th class="th-status">Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataRoom as $item)
              <tr>
              @if (!$item->password)
              <td><a href="/room/{{$item->generate_id}}">#{{$item->generate_id}}</a></td>              
              @else
              <td><a href="#" onclick="typePassword({{$item->generate_id}})">#{{$item->generate_id}}</a></td>              
              @endif
                <td>{{$item->room_name}}</td>
                <td>Rp. {{$item->price_per_player}}</td>
                <td>{{$item->period}}</td>
                <td>{{$item->total_player_join}}/{{$item->total_player}}</td>
                <td>{{$item->password ? 'lock' : 'public'}}</td>
              </tr> 
            @endforeach
          </tbody>
        </table>
      </div>
      
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<div id="contactForm">

  <h1>Masukan Password</h1>
    <input class="fld-pass-room"  type="password" placeholder="password" />
    <input class="formBtn btnPasswordRoom" type="submit" value="MASUK" />
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
<script src="js/jquery.min.js"></script>
<script src="js/jquery.backtotop.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script>
var init = '';
$(document).mouseup(function (e) {
    var container = $("#contactForm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function typePassword(id){
  $('#contactForm').fadeToggle();
  init = id;
}

$('.btnPasswordRoom').click(function(){
  var password = $('.passwordRoom').val();
  $.ajax({
        type: "PUT",
        url: "/checkRoom/"+init,
        data: {
          "_token": "{{ csrf_token() }}",
          "password": password
        },
        success: function(msg){
          if (msg.data) {
            window.location.href = "/room/"+init;
          }else{
            alert(msg.message)
          }
        }
      });
});
</script>
</body>
</html>