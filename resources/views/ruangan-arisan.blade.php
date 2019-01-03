<!DOCTYPE html>

<html lang="">
<head>
<title>ARISEN</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="{{ url('/css/layout.css') }}" media="screen" type="text/css" />
<link rel="stylesheet" href="{{ url('/css/login.css') }}" media="screen" type="text/css" />
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
@include('header-name')
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">

    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">

    </div>
    <div id="quickinfo" class="fl_right">

    </div>
    <!-- ################################################################################################ -->
  </header>
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    @include('nav-bar')
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('/images/2.png');">
  <section id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
   
    <!-- ################################################################################################ -->
  <h1 style="font-size: 25px;" class="heading">#{{$id}}</h1>
  <h6 class="heading">{{$data->room_name}}</h6>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3" style="background-image:url('/images/bg/ra.png');">
    <main class="hoc container clear"> 
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div class="content"> 
          <!-- ################################################################################################ -->
         <div class="scrollable">
           <p style="font-size: 30px ; margin-bottom: 10px; text-align: center;">RIWAYAT PERMAINAN</p>
           @if ($boolStart)
           <button class="countdown">
              UNDIAN
              <br>
              <!-- <span id="hari"></span><span id="jam"></span><span id="menit"></span><span id="detik"></span> -->
              <div id="clockdiv">
                <div>
                  <span id="hari"></span>
                  <div class="smalltext">Hari</div>
                </div>
                <div>
                  <span id="jam"></span>
                  <div class="smalltext">Jam</div>
                </div>
                <div>
                  <span id="menit"></span>
                  <div class="smalltext">Menit</div>
                </div>
                <div>
                  <span id="detik"></span>
                  <div class="smalltext">Detik</div>
                </div>
              </div>
            </button>
            @else
            <a href="/undi-arisan/{{$id}}"><button class="undian-btn">
                UNDI ARISAN
              </button>
            </a>
              <div class="form-popup" id="myForm2" >
                  <form action="/action_page.php" class="form-container" style="margin-bottom: -150px;">
                    <div class="undian-prev" style="background-image:url('/images/backgrounds/3.png');">
                      <p style="font-size: 30px; line-height: 30px; padding-top: 150px; text-align: center;">Selamat,<br> <br> Yudha Darmawan Gustavianto</p>
                    </div>
                    <button type="button" class="btn cancel" onclick="closeForm2()">Tutup</button>
                  </form>
              </div>
           @endif
            <div class="form-popup" id="myForm" >
    
            </div>
           <div class="swimlane-arisan" style="background-image:url('/images/backgrounds/1.png');">
             <div class="box">
                <ul>
                    <li>
                        <span></span>
                        <div class="title">Undian ke-1</div>
                        <div class="info">Harap saldo anda cukup</div>
                        <div class="name">system</div>
                        <div class="time">
                            <span>JAN, 17<sup>th</sup></span>
                            <span>FEB, 18<sup>th</sup></span>
                        </div>
                    </li>
                    <li>
                        <span></span>
                        <div class="title">summery #01</div>
                        <div class="info">the best animation , the best toturials you would ever see here only . you can learn how to animate and how to use SVG . even else you can add your own animations .</div>
                        <div class="name">- eng. amr -</div>
                        <div class="time">
                            <span>JUN, 29<sup>th</sup></span>
                            <span>11:36 AM</span>
                        </div>
                    </li>
                    <li>
                        <span></span>
                        <div class="title">comment #02</div>
                        <div class="info">the best animation , the best toturials you would ever see . what about canvas ?? do you like it ..</div>
                        <div class="name">- dr. ahmed -</div>
                        <div class="time">
                            <span>FEB, 2<sup>nd</sup></span>
                            <span>02:00 PM</span>
                        </div>
                    </li>
                    
                    
                </ul>
    
            </div>
           </div>
         </div>
          <div class="scrollable">
            <div class="text-kolom">
              <p style="font-size: 30px ; margin-bottom: 10px; text-align: center;">KOLOM KOMENTAR</p>
            </div>
            <div class="swimlane-comment" style="background-image:url('/images/backgrounds/2.png'); overflow-y:hidden;">
             <div class="box2" id="box-comment" style="overflow-y:scroll ; height: 450px;">
                <ul id="first-list" class="comment-list">
                </ul>
            </div>          
            </div>
          </div>
          @if (!$joinRoom)
              {{-- tambah ruangan --}}
              <button class="open-button" onclick="openForm()">Tambah Ruangan</button>
              <div class="form-popup" id="myForms" >
              <form action="/add-room/{{Sentinel::getUser()->id}}/{{$data->generate_id}}" method="GET" class="form-container">
                  <p style="font-size: 25px ; margin-bottom: 20px; text-align: center;">Tambah Ruangan Ini ?</p>
                  <button type="submit" class="btn">Tambah</button>
                  <button type="button" class="btn cancel" onclick="closeForm()">Batal</button>
                </form>
              </div>
              {{-- end --}}
          @endif
          <div>
          <div>
            <div  class="inp-com">
                <div>
                  <textarea  class="inp-com-txt comment-text" id="subject" name="subject" placeholder="Ayo Berkomentar..."></textarea>
                </div>
                <div>
                  <input  type="submit" name="login" class="com-but comment-btn" value="KOMENTAR">
                </div>
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

<!-- JAVASCRIPTS -->
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.backtotop.js"></script>
<script src="../js/jquery.mobilemenu.js"></script>
<script>
  var init = 0;
  $( document ).ready(function() {
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
    var tid = setTimeout(mycode, 1000);
    function mycode() {
      tid = setTimeout(mycode, 1000); 
      $.ajax({
        type: "GET",
        url:"/roomComment/{{$data->id}}",
        success: function(msg){
          if(msg.data.length > init){
            var i = init;
            for(i; msg.data.length>i ; i++ ){
              $('.comment-list').append('<li>'+
                            '<div><h1>'+msg.data[i].user.first_name+'<h1></div>'+
                            '<div>'+msg.data[i].comment+'</div>'+
                            '<div class="time-com">'+msg.data[i].tanggal+' <sup>'+msg.data[i].tahun+'</sup></div>'+
                        '</li>');
            }
            init = msg.data.length;
            var objDiv = document.getElementById("box-comment");
            objDiv.scrollTop = objDiv.scrollHeight;
          }
        }
      });
    }
    
    $.ajax({
        type: "GET",
        url:"/roomComments/{{$data->id}}",
        success: function(msg){
          // console.log(msg.data)
          var i = 0;
          for(i; msg.data.length>i ; i++ ){
            $('.comment-list').append('<li>'+
                          '<div><h1>'+msg.data[i].user.first_name+'<h1></div>'+
                          '<div>'+msg.data[i].comment+'</div>'+
                          '<div class="time-com">'+msg.data[i].tanggal+' <sup>'+msg.data[i].tahun+'</sup></div>'+
                      '</li>');
          }
          init = msg.data.length;
          var objDiv = document.getElementById("box-comment");
          objDiv.scrollTop = objDiv.scrollHeight;
        }
      });

      function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  // var daysSpan = clock.querySelector('.days');
  // var hoursSpan = clock.querySelector('.hours');
  // var minutesSpan = clock.querySelector('.minutes');
  // var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);
    document.getElementById('hari').innerHTML = t.days;
    document.getElementById('jam').innerHTML = ('0' + t.hours).slice(-2);
    document.getElementById('menit').innerHTML = ('0' + t.minutes).slice(-2);
    document.getElementById('detik').innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }
  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}
var deadline = "{{$getDataTimes}}";

initializeClock('clockdiv', deadline);
});
  $('.comment-btn').click(function(){
    var comment = $('.comment-text').val();
    $.ajax({
      type: "POST",
      url:"/roomComment/{{$data->id}}",
      data: {
        "_token": "{{ csrf_token() }}",
        "comment": comment
        },
      success: function(msg){
        $('.comment-text').val('')
        var objDiv = document.getElementById("box-comment");
        objDiv.scrollTop = objDiv.scrollHeight;
        
      }
    });
  });

function openForm() {
    document.getElementById("myForms").style.display = "block";
}

function openForm2() {
    document.getElementById("myForm2").style.display = "block";
}

function closeForm() {
    document.getElementById("myForms").style.display = "none";
}

function closeForm2() {
    document.getElementById("myForm2").style.display = "none";
}
  
</script>
</body>
</html>