<div class="wrapper row4 bgded overlay" style="background-image:url('/images/backgrounds/03.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <div class="logo-footer" style="background-image:url('/images/logo/logo-header.png'); background-repeat: no-repeat; background-position: center; margin-bottom: 50px; ">
        
      </div>
      <nav>
        <ul class="nospace inline pushright uppercase">
          @if (Route::getCurrentRoute()->uri == '/')
          <li class="active"><a href="/"><i class="fa fa-home"></i></a></li>
          @else
          <li><a href="/"><i class="fa fa-home"></i></a></li>
          @endif
      
          @if (Route::getCurrentRoute()->uri == 'forum')
          <li class="active"><a href="forum">ARISAN</a></li>        
          @else
          <li><a href="/forum">ARISAN</a></li>        
          @endif
      
          @if (Route::getCurrentRoute()->uri == 'arbar')
          <li class="active"><a href="arbar">ARBAR</a></li>        
          @else
          <li><a href="/arbar">ARBAR</a></li>        
          @endif
      
          @if (Route::getCurrentRoute()->uri == 'bantuan')
          <li class="active"><a href="bantuan">BANTUAN</a></li>        
          @else
          <li><a href="/bantuan">BANTUAN</a></li>        
          @endif
      
          @if (Route::getCurrentRoute()->uri == 'tentang-kami')
          <li class="active"><a href="tentang-kami">TENTANG KAMI</a></li>        
          @else
          <li><a href="/tentang-kami">TENTANG KAMI</a></li>        
          @endif
        </ul>
      </nav>
    </div>
    <!-- ################################################################################################ -->
    <hr class="btmspace-50">
    <!-- ################################################################################################ -->
    <div class="group">
      <div class="one_third first">
        <h6 class="heading" style="text-align: center;">Hubungi Kami :</h6>
        <ul class="nospace btmspace-30 linklist contact">
          <li><i class="fa fa-map-marker"></i>
            <address>
            Jl. Cempaka Baru VII , no.12 , <br>Jakarta-Pusat, 10640
            </address>
          </li>
          <li><i class="fa fa-phone"></i> +62 (081) 315 905 776</li>
          <li><i class="fa fa-fax"></i>(021) 425 258 7</li>
          <li><i class="fa fa-envelope-o"></i>arisan.arisen@gmail.com</li>
        </ul>
      </div>
      <div class="one_third">
        <h6 class="heading" style="text-align: center;">Temui Kami :</h6>
        <figure><a href="https://www.google.com/maps/place/Nasi+Uduk+Bandara+(+Si+Kembar+)/@-6.0913744,106.6921913,19z/data=!4m5!3m4!1s0x2e6a033afe7bc10d:0xbd42bc7467ce79fb!8m2!3d-6.091197!4d106.6925749">
          <img class="borderedbox inspace-10 btmspace-15" src="../images/320x168.png" alt="">
        </a>

        </figure>
      </div>
      <div class="one_third">
        <h6 class="heading" style="text-align: center;">Ikuti Kami :</h6>
        <div style=" width: 100%; height: 100px;">
          <div class="sosmed">
            <a href="">
                <i class="fa fa-facebook active" style="font-size: 100px;"></i>
            </a>
          </div>
          <div class="sosmed">
            <a href="">
                <i class="fa fa-twitter active" style="font-size: 100px;"></i>
            </a>
          </div>
        </div>
        <div style=" width: 100%; height: 100px; margin-top: 10px;">
            <div class="sosmed">
                <a href="">
                    <i class="fa fa-instagram active" style="font-size: 100px;"></i>
                </a>
              </div>
            <div class="sosmed">
            <a href="">
                <i class="fa fa-linkedin active" style="font-size: 100px;"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>`
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">ARISEN</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>