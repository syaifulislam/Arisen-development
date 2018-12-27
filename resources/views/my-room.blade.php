<!DOCTYPE html>

<html lang="">
<head>
<title>ARISEN-My Room</title>
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
    <h6 class="heading">RUANGAN SAYA</h6>
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
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div class="scrollable">
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
                <td><a href="/ruangan-arisan/{{$item->room->generate_id}}">#{{$item->room->generate_id}}</a></td>
                  <td>{{$item->room->room_name}}</td>
                  <td>Rp. {{$item->room->price_per_player}}</td>
                  <td>{{$item->room->period}}</td>
                  <td>{{$item->room->total_player_join}}/{{$item->room->total_player}}</td>
                  <td>{{$item->room->password ? 'lock' : 'public'}}</td>
                </tr> 
              @endforeach
            </tbody>
          </table>
        </div>



      </div>
      
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

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.backtotop.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
</body>
</html>
