  @if (Sentinel::check())
  <div class="wrapper row0">
      <div id="topbar" class="hoc clear"> 
          <div class="fl_left">
              <ul>
                <a class="pem" href="/notification-user">
                  <li>
                    <i class="fa fa-envelope fa-fw"></i>Notifikasi
                  </li>
                </a>
              </ul>
            </div>
        <div id='cssmenu'class="fl_right">
          <div>
            <a class="pem" href="/riwayat-keuangan">{{ Money::IDR(Sentinel::getUser()->money,true)->format() }}</a>
          </div>
          <ul>
          <li><a href='#'><span>Welcome, {{Sentinel::getUser()->first_name}}</span></a>
            <ul>
              <li><a href='/my-account'><span>Akun Saya</span></a></li>
              <li><a href='/my-room'><span>Ruangan Saya</span></a></li>
              <li><a href='/auth/logout' style="color: red;"><span>Keluar</span></a></li>
            </ul>
           </li>
          </ul>
        </div>
      </div>
    </div>
  @else
  <div class="wrapper row0">
      <div id="topbar" class="hoc clear"> 
        <div class="fl_left">
          <ul>
          </ul>
        </div>
        <div class="fl_right">
          <ul>
            
          <li><a href="auth/login">Masuk</a></li>
            <li><a href="auth/register">Daftar</a></li>
          </ul>
        </div>
      </div>
    </div>
  @endif
  <a href="/">
  <header id="header" class="hoc clear" style="background-image:url('/images/logo/logo-header.png'); background-repeat: no-repeat; background-position: center; margin-top: 20px; margin-bottom: 20px;"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">

    </div>
    <div id="quickinfo" class="fl_right">

    </div>
    <!-- ################################################################################################ -->
  </header>
</a>