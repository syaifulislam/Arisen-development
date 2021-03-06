<!DOCTYPE html>

<html lang="">
<head>
<title>ARISEN-Akun Saya</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="{{ url('/css/layout.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ url('/css/login.css') }}" media="all" type="text/css" />

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
    <h6 class="heading">Detail Akun</h6>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3" >
  <main class="hoc container clear" > 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content-2" style="background-image:url('images/backgrounds/5.png'); background-attachment: center;"> 
      <!-- ################################################################################################ -->
      @if(Sentinel::getUser()->is_verif == 0)
        <div class="aktif-akun">
          <div class="status-user">
              <p style="font-size: 30px ; line-height: 50px; margin-bottom: 10px; text-align: center;">Status:<br>{{Sentinel::getUser()->is_verif == 1 ? 'TERAKTIFASI' : 'BELUM TERAKTIVASI'}}</p>
          </div>
          @if (!$data->user_details)
          <div  class="login-card">
              <form action="verification" method="POST" enctype="multipart/form-data">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input class="aktifasi-text" type="text" name="bank_account_number" placeholder="Nomor Rekening Anda">
                <input class="aktifasi-text" type="text" name="bank_account_name" placeholder="Nama Pemilik Rekening">
                <select name="bank_account_office" class="arisan-per2">
                  <option value="">---------------Pilih Bank Anda---------------</option>
                  <option value="bca">BCA</option>
                  <option value="mandiri">Mandiri</option>
                </select>
                <label>Contoh Foto Aktivasi</label> 
                <div class="contoh-aktifasi"></div>
                  <div class="col-lg-12">
                    <label>Masukan Berkas Anda</label> 
                    <input type="file" name="fileToUpload" id="fileToUpload" class="chs-file">

                    <p>Berkas Maximal 5 MB.</p>                  
                  </div>
                <input  type="submit" name="login" class="login login-submit" value="AKTIFKAN">
              </form>
          </div>
          @else
          <div class="login-card">
                <input class="aktifasi-text" type="text" name="bank_account_number" placeholder="{{$data->user_details->bank_account_number}}" disabled>
                <input class="aktifasi-text" type="text" name="bank_account_name" placeholder="{{$data->user_details->bank_account_name}}" disabled>
                <input class="aktifasi-text" type="text" name="bank_account_office" placeholder="{{$data->user_details->bank_account_office}}" disabled>
          </div>
          @endif
        </div>
        @endif
        <div class="content-l">
          @if(Sentinel::getUser()->is_verif == 0)
        
              <div class="detail-akun-id">
            <div class="username-user">
            <h1 class="text-align">{{Sentinel::getUser()->first_name}} {{Sentinel::getUser()->last_name}}</h1>
            </div>
            <div class="id-user">
            <h1 class="text-align">{{Sentinel::getUser()->user_code}}</h1>
            </div>
            <div class="saldo-user">
            <h1 class="text-align">{{Money::IDR(Sentinel::getUser()->money,true)->format()}}</h1>
            </div>
            <a href="#"><div class="button-setor"></div></a>
            <a href="#"><div class="button-tarik"></div></a>
            <a href="#"><div class="button-his-uang"></div></a>
            <a href="#"><div class="button-his-main"></div></a>
            <!-- @if(Sentinel::getUser()->is_verif == 1)
            <h1>Status: TERAKTIFASI</h1>
            @endif -->
          </div>
          @else 
 
          <div class="detail-akun-id" style="margin-left: 36%;">
            <div class="username-user">
            <h1 class="text-align">{{Sentinel::getUser()->first_name}} {{Sentinel::getUser()->last_name}}</h1>
            </div>
            <div class="id-user">

                <table style="width:100%;">
                    <tr>
                      <th>ID</th>
                    </tr>
                    <tr>
                      <td>{{Sentinel::getUser()->user_code}}</td>
                    </tr>
                  </table>
            </div>
            <div class="saldo-user">

                <table style="width:100%;">
                    <tr>
                      <th>Saldo Aktif</th>
                    </tr>
                    <tr>
                      <td>{{Money::IDR($data->user_details->money,true)->format()}}</td>
                    </tr>
                  </table>

            </div>
            <a href="/setor"><div class="button-setor"></div></a>
            <a href="/tarik"><div class="button-tarik"></div></a>
            <a href="/riwayat-keuangan"><div class="button-his-uang"></div></a>
            <a href="/riwayat-permainan"><div class="button-his-main"></div></a>

            <table style="width:100%;">
              <tr>
                <th>Status</th>
              </tr>
              <tr>
                <td>{{Sentinel::getUser()->is_verif == 1 ? 'TERAKTIFASI' : (Sentinel::getUser()->is_verif == 2 ? 'DITOLAK' : 'BELUM TERAKTIFASI') }}</td>
              </tr>
            </table>
          </div>
          @endif
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
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{ url('/js/jquery.min.js') }}"></script>
<script src="{{ url('/js/jquery.backtotop.js') }}"></script>
<script src="{{ url('/js/jquery.mobilemenu.js') }}"></script>
<script>
$(document).ready(function(){
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  });
</script>
</body>
</html>