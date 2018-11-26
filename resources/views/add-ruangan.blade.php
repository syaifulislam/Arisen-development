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
  <header id="header" class="hoc clear"> 
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
<div class="wrapper bgded overlay" style="background-image:url('../images/backgrounds/01.png');">
  <section id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
   
    <!-- ################################################################################################ -->
  <h1 style="font-size: 25px;" class="heading"></h1>
  <h6 class="heading"></h6>
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
           <h1>riwayat permainan</h1>
           <button class="open-button" onclick="openForm()">Tambah Ruangan</button>
           <div class="form-popup" id="myForm" >
             <form action="/action_page.php" class="form-container">
               <h1>Tambah Ruangan Ini ?</h1>
               <button type="submit" class="btn">Tambah</button>
               <button type="button" class="btn cancel" onclick="closeForm()">Batal</button>
             </form>
           </div>
            <div class="form-popup" id="myForm" >
    
            </div>
           <div class="swimlane-arisan">
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
            <div class="text-kolom"><h1>kolom komentar</h1></div>
            <div class="swimlane-comment" style="overflow-y:hidden;">
             <div class="box2" id="box-comment" style="overflow-y:scroll ; height: 450px;">
                <ul id="first-list" class="comment-list">
                </ul>
            </div>          
            </div>
          </div>
          <div>
            <div  class="inp-com">
                <div>
                  <textarea  class="inp-com-txt comment-text" id="subject" name="subject" placeholder="Write something.."></textarea>
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
    var tid = setTimeout(mycode, 1000);
    function mycode() {
      tid = setTimeout(mycode, 1000); 
      $.ajax({
        type: "GET",
        url: "/roomComments/",
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
        url: "/roomComment/",
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
var deadline = new Date(Date.parse(""));

initializeClock('clockdiv', deadline);
  });
  $('.comment-btn').click(function(){
    var comment = $('.comment-text').val();
    $.ajax({
      type: "POST",
      data: {
        "_token": "{{ csrf_token() }}",
        "comment": comment
        },
      url: "/roomComment/",
      success: function(msg){
        $('.comment-text').val('')
        var objDiv = document.getElementById("box-comment");
        objDiv.scrollTop = objDiv.scrollHeight;
        // init++;
        // $('.comment-list').append('<li>'+
        //                 '<div><h1>SIXIOT<h1></div>'+
        //                 '<div>Harap saldo anda cukup</div>'+
        //                 '<div class="time-com">JAN 1 <sup>th</sup></div>'+
        //             '</li>');
      }
    });
  });
  
  function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

</script>
</body>
</html>