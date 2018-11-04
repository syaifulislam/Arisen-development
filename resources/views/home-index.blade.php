<!DOCTYPE html>
<html>
<head>
  <title>Trial of me</title>
  <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
  <link rel="stylesheet" href="{{ url('/css/style.css') }}" media="screen" type="text/css" />
  <meta charset="utf-8">
  <meta name="viewport" content="witdh=device-witdh, initial-scale=1.0">
  <meta http-equiv="X-UA-compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
</head>
<body>
  <div class="container">

    <div class="overlay">
      
      <p class="screen">EXPLORE</p>

      <div class="intro">
        <button class="openingButton" onclick="fadeOut()">EXPLORE</button>
      </div>

    </div>

    <div class="overlay2"></div>

    <div class="content">
      <h1>Landing Page</h1>
      <p class="data">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <li>
        <div class="boxes">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

      </li>
      
      <li>
        <div class="boxes">
        <div class="round"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </li>

      
    </div>
  </div>

  <script>
    function fadeOut(){
      TweenMax.to(".openingButton",1,{
        y:-100,
        opacity:0
      });

      TweenMax.to(".screen",2,{
        y:-400,
        opacity:0,
        ease:Power2.easeInOut,
        delay:2
      });

      TweenMax.from("overlay",2, {
        ease:Power2.easeInOut
      });

      TweenMax.to(".overlay",2,{
        delay:2.6,
        top:"-110%",
        ease:Expo.easeInOut
      });

      TweenMax.to(".overlay2",2,{
        delay:3,
        top:"-110%",
        ease:Expo.easeInOut
      });

      TweenMax.from(".content",2,{
        delay:3.2,
        opacity:0,
        ease:Power2.easeInOut
      });

      TweenMax.to(".content",2,{
        opacity:1,
        y:-300,
        delay:3.2,
        ease:Power2.easeInOut
      })
    }
  </script>

</body>
</html>