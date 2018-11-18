  @if (Sentinel::check())
  <div class="wrapper row0">
      <div id="topbar" class="hoc clear"> 
        <div class="fl_left">
          <ul>
          </ul>
        </div>
        <div id='cssmenu'class="fl_right">
          <div>
            <a href="#">{{ Money::IDR(Sentinel::getUser()->money,true)->format() }}</a>
          </div>
          <ul>
          <li><a href='#'><span>Welcome, {{Sentinel::getUser()->first_name}}</span></a>
            <ul>
              <li><a href='/my-account'><span>Akun Saya</span></a></li>
              <li><a href='/my-room'><span>Ruangan Saya</span></a></li>
              <li><a href='/auth/logout'><span>Keluar</span></a></li>
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