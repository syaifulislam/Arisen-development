<div class="templatemo-sidebar">
    <header class="templatemo-site-header">
      <div class="square"></div>
      <a href="home-admin"><h1>ARISEN Admin</h1></a>
    </header>
    <div class="profile-photo-container">
      <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
      <div class="profile-photo-overlay"></div>
    </div>      
    <!-- Search box -->

    <div class="mobile-menu-icon">
        <i class="fa fa-bars"></i>
    </div>
    <nav class="templatemo-left-nav">          
      <ul>
        @if (Route::getCurrentRoute()->uri == 'home-admin')
          <li><a href="home-admin" class="active"><i class="fa fa-home fa-fw"></i>Halaman Utama</a></li>
        @else
          <li><a href="home-admin"><i class="fa fa-home fa-fw"></i>Halaman Utama</a></li>            
        @endif
        <li><a href="coming-soon"><i class="fa fa-envelope fa-fw"></i>Notifikasi</a></li>
        @if (Route::getCurrentRoute()->uri == 'aktivasi-akun-admin')
          <li><a class="active" href="aktivasi-akun-admin"><i class="fa fa-check-circle fa-fw"></i>Aktivasi Akun</a></li>            
        @else
          <li><a href="aktivasi-akun-admin"><i class="fa fa-check-circle fa-fw"></i>Aktivasi Akun</a></li>            
        @endif
        @if (Route::getCurrentRoute()->uri == 'tarik-dana-admin')
          <li><a class="active" href="tarik-dana-admin"><i class="fa fa-bank fa-fw"></i>Tarik Dana</a></li>
        @else
          <li><a href="tarik-dana-admin"><i class="fa fa-bank fa-fw"></i>Tarik Dana</a></li>
        @endif
        @if (Route::getCurrentRoute()->uri == 'setor-dana-admin')
          <li><a class="active" href="setor-dana-admin"><i class="fa fa-money fa-fw"></i>Setor Dana</a></li>
        @else
          <li><a href="setor-dana-admin"><i class="fa fa-money fa-fw"></i>Setor Dana</a></li>
        @endif
        @if (Route::getCurrentRoute()->uri == 'arbar-admin')
          <li><a class="active" href="arbar-admin"><i class="fa fa-users fa-fw"></i>ARBAR</a></li>
        @else
          <li><a href="arbar-admin"><i class="fa fa-users fa-fw"></i>ARBAR</a></li>
        @endif
        @if (Route::getCurrentRoute()->uri == 'riwayat-keuangan-admin')
          <li><a class="active" href="riwayat-keuangan-admin"><i class="fa fa-history fa-fw"></i>Riwayat Keuangan</a></li>
        @else
          <li><a href="riwayat-keuangan-admin"><i class="fa fa-history fa-fw"></i>Riwayat Keuangan</a></li>
        @endif
        @if (Sentinel::getUser()->role_user == 'admin' && Sentinel::getUser()->is_super_admin == 1)
          @if (Route::getCurrentRoute()->uri == 'laporan-keuangan')
            <li><a class="active" href="laporan-keuangan"><i class="fa fa-history fa-fw"></i>Laporan Keuangan</a></li>
          @else
            <li><a href="laporan-keuangan"><i class="fa fa-history fa-fw"></i>Laporan Keuangan</a></li>
          @endif
        @endif
        <li><a href="auth/logout"><i class="fa fa-eject fa-fw"></i>Keluar</a></li>

      </ul>  
    </nav>
  </div>