<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>ARISEN Admin - Notifikasi</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

<link rel="stylesheet" href="{{ url('/css/font-awesome.min.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ url('/css/layout.css') }}" media="all" type="text/css" />



    <link href="css/templatemo-style.css" rel="stylesheet">
    

  </head>
  <body class="body-admin">  
    <!-- Left column -->
    <div class="templatemo-flex-row">
        @include('sidebar-admin')
        <!-- Main content --> 
        <div class="templatemo-content col-1 light-gray-bg">
            @include('header-admin')
        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
          </div>

          <div class="ctn-dsh-adm">
          <div class="but-add-adm" onclick="addArbar()">
              <a href="#" >
                  <i class="button-cre">Tambah ARBAR</i>
              </a>
          </div>
          <div class="scrollable">
            <table>
              <thead>
                <tr>
                  <th class="th-id">ID</th>
                  <th class="th-title">Judul ARBAR</th>
                  <th class="th-title">Sponsor ARBAR</th>
                  <th class="th-nominal">Email Sponsor</th>
                  <th class="th-nominal">Batas Pemain</th>
                  <th class="th-nominal">Jumlah</th>
                  <th class="th-nominal">Masa Berlaku</th>

                </tr>
              </thead>
              <tbody>
                  <tr >

                    <td><a href="#" onclick="varbar()">#1231242  </a></td>
                    <td>Gratis 3 Kopi</td>
                    <td>Gold Drip</td>
                    <td>golddrip@gmail.com</td>
                    <td>3 Pemain</td>
                    <td>100/100</td>
                    <td>12 NOV 2018</td>

                  </tr>  
                  
                  <tr >

                      <td><a href="#" onclick="varbar()">#1232362  </a></td>
                      <td>Gratis 5 Roti Bakar</td>
                      <td>Gold Drip</td>
                      <td>golddrip@gmail.com</td>
                      <td>5 Pemain</td>
                      <td>57/100</td>
                      <td>10 NOV 2018</td>
  
                    </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div id="form-view-arbar">

            <h1>Gratis 3 Kopi</h1>
            
            <form action="#">
              <div class="img-promo-arbar">
                <a href="#" onclick="viewDetail()">
                    <i class="fa fa-search-plus fa-fw" ></i>
                </a>
              </div>

              <div class="img-kupon-arbar">
                  <a href="#" onclick="viewDetail()">
                      <i class="fa fa-search-plus fa-fw" ></i>
                  </a>
                </div>
                <div class="inf-form-adm">
                    #1321351<br>
                    Gold Drip<br>
                    golddrip@gmail.com<br>
                    Jl.Cempaka Baru VII no.12 , Jakarta-Pusat<br>
                    021-4252587<br>
                    3 Pemain<br>
                    100/100<br>
                    12 NOV 2018<br>
                </div>
              
              <input class="formBtn" type="submit" value="UBAH" onclick=" ubahArbar()"/>
              <input class="formBtn" type="submit" value="HAPUS"/>
              <input class="formBtn" type="submit" value="TUTUP"/>
            </form>
          </div>
          <div class="view-img-adm"> 
            <form action="#">
                <div class="contactForm-view-img"></div>

                <input class="formBtn" type="submit" value="TUTUP"/>
            </form>
          </div>
          <div class="form-ubah-arbar2">

            <h1>Ubah ARBAR</h1>
            
            <form action="#">
              <input name="" type="hidden" value=""/>
              <div class="form-add-arbar2">
                <input class="fld-tambah-arbar" type="text" name="first_name" placeholder="Gratis 3 Kopi">
                <input class="fld-tambah-arbar" type="text" name="first_name" placeholder="Gold Drip">
                <input class="fld-tambah-arbar" type="text" name="last_name" placeholder="Jl.Cempaka Baru VII no.12 , Jakarta-Pusat">
                <input class="fld-tambah-arbar" type="email" name="email" placeholder="golddrip@gmail.com">
                <input class="fld-tambah-arbar" type="email" name="email" placeholder="021-4252587">

                <div class="add-arbar">
                  <div class="inf-user2">Pemain</div>
                  <input  type="number" name="total_player" min="2" max="100" step="1" data-number-stepfactor="1" placeholder="3">
                </div>
                
                <div class="add-arbar">
                    <div class="inf-user2">Kupon</div>
                    <input  type="number" name="total_player" min="2" max="1000" step="1" data-number-stepfactor="1" placeholder="100">
                  </div>

                <div class="form-tambah-arbar3">
                  <label>Gambar Promo</label> 
                  <input type="file" name="fileToUpload" id="fileToUpload" class="chs-file">
                </div>
                <p>Berkas Maximal 5 MB.</p>
                <div class="form-tambah-arbar3">
                    <label>Gambar Kupon</label> 
                    <input type="file" name="fileToUpload" id="fileToUpload" class="chs-file">
                </div>
                <p>Berkas Maximal 5 MB.</p>
              </div>
              <div class="btn-arbar-div">
                <input class="btn-arbar" type="submit" value="UBAH ARBAR"/>
                <input class="btn-arbar" type="submit" value="TUTUP"/>
              </div>
            </form>
          </div>

          <div class="form-add-arbar">

                <h1>Tambah ARBAR</h1>
                
                <form action="" method="">
                      <input name="" type="hidden" value=""/>
                        <div class="form-add-arbar2">
                          <input class="fld-tambah-arbar" type="text" name="first_name" placeholder="Judul ARBAR">
                          <input class="fld-tambah-arbar" type="text" name="first_name" placeholder="Sponsor ARBAR">
                          <input class="fld-tambah-arbar" type="text" name="last_name" placeholder="Alamat Sponsor ARBAR">
                          <input class="fld-tambah-arbar" type="email" name="email" placeholder="Email Sponsor ARBAR">
                          <input class="fld-tambah-arbar" type="email" name="email" placeholder="Kontak Sponsor ARBAR">

                          <div class="add-arbar">
                            <div class="inf-user2">Pemain</div>
                            <input  type="number" name="total_player" min="2" max="100" step="1" data-number-stepfactor="1" placeholder="Batas Pemain">
                          </div>
                          
                          <div class="add-arbar">
                              <div class="inf-user2">Kupon</div>
                              <input  type="number" name="total_player" min="2" max="1000" step="1" data-number-stepfactor="1" placeholder="Jumlah Kupon">
                            </div>

                          <div class="form-tambah-arbar3">
                            <label>Gambar Promo</label> 
                            <input type="file" name="fileToUpload" id="fileToUpload" class="chs-file">
                          </div>
                          <p>Berkas Maximal 5 MB.</p>
                          <div class="form-tambah-arbar3">
                              <label>Gambar Kupon</label> 
                              <input type="file" name="fileToUpload" id="fileToUpload" class="chs-file">
                          </div>
                          <p>Berkas Maximal 5 MB.</p>
                        </div>
                        <div class="btn-arbar-div">
                          <input class="btn-arbar" type="submit" value="TAMBAH ARBAR"/>
                          <input class="btn-arbar" type="submit" value="TUTUP"/>
                        </div>

                      </form>
          </div>
          
        </div>


          <footer class="text-right">
            <p>Copyright &copy; 2018 ARISEN</a></p>
          </footer>         
        </div>
      </div>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.backtotop.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script>
$(document).mouseup(function (e) {
    var container = $("#form-view-arbar");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function varbar(){
  $('#form-view-arbar').fadeToggle();

}

$(document).mouseup(function (e) {
    var container = $(".view-img-adm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function viewDetail(){
  $('.view-img-adm').fadeToggle();

}

$(document).mouseup(function (e) {
    var container = $(".form-ubah-arbar2");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function ubahArbar(){
  $('.form-ubah-arbar2').fadeToggle();

}

$(document).mouseup(function (e) {
    var container = $(".form-add-arbar");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });

function addArbar(){
  $('.form-add-arbar').fadeToggle();

}

    </script>

  </body>
</html>