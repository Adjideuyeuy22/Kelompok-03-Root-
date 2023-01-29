<?php
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM tb_registrasi WHERE id='$_GET[id]'");
   
$cek = mysqli_fetch_array($query);
  $id = $_GET['id'];
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Order</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Order.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.3.6, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Order">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-custom-color-2 u-header u-header" id="sec-c9cd"><div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <p class="u-custom-font u-text u-text-custom-color-3 u-text-default u-text-1">SEPATOE'S</p>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1.125rem; letter-spacing: 0px; font-weight: 400;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base" href="menu.php?id=<?=$id?>" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base" href="Order.php?id=<?=$id?>" style="padding: 10px 20px;">Order</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base" href="Layanan.php?id=<?=$id?>" style="padding: 10px 20px;">Layanan</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base" href="pesanan.php?id=<?=$id?>" style="padding: 10px 20px;">Pesanan</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base" href="riwayat.php?id=<?=$id?>" style="padding: 10px 20px;">Riwayat</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base" href="riview.php?id=<?=$id?>" style="padding: 10px 20px;">Review</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base" href="index.php" style="padding: 10px 20px;">Log Out</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="menu.php?<?=$id?>">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Order.php?id=<?=$id?>">Order</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Layanan.php?id=<?=$id ?>">Layanan</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="pesanan.php?id=<?=$id?>">Pesanan</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="riwayat.php?id=<?=$id?>">Riwayat</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="riview.php?id=<?=$id?>">Review</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Log Out</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-1a1a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-custom-color-2 u-expanded-width u-group u-radius-50 u-shape-round u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <p class="u-custom-font u-text u-text-custom-color-3 u-text-default u-text-1">Order</p>
            <p class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-default u-text-2">Pesan Layanan</p>
          </div>
        </div>
        <div class="u-palette-1-base u-radius-50 u-shape u-shape-round u-shape-1"></div>
        <div class="u-form u-form-1">



          <form action="order_proses.php" method="post">
            <div class="u-clearfix u-form-spacing-25 u-form-vertical u-inner-form" style="padding: 30px;">
            <div class="u-form-group u-form-name">
              <label for="name-ebf1" class="u-label">id Pemesan</label>
              <input type="text" placeholder="Enter your Name" id="name-ebf1" value="<?=$cek['id'] ?>" name="id" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-name">
              <label for="name-ebf1" class="u-label">Nama Pemesan</label>
              <input type="text" placeholder="Enter your Name" id="name-ebf1" value="<?=$cek['nama_pengguna'] ?>" name="nama" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-ebf1" class="u-label">Nomer Hp Pemesan</label>
              <input type="text" placeholder="masukan nomer hp anda" id="email-ebf1" value="<?=$cek['no_hp'] ?>" name="nohp" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-group-3">
              <label for="text-ae0c" class="u-label">Alamat Pemesan</label>
              <input type="text" placeholder="masukan alamat anda" id="text-ae0c" name="alamat" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
            </div>
            <div class="u-form-group u-form-group-4">
              <label for="text-a9d0" class="u-label">Paket</label>
              <select name="paket" id="paket" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                <option disabled selected >Pilih</option>
                <?php
                 $sql = mysqli_query($conn, "SELECT * FROM tb_paket");
                while($data=mysqli_fetch_array($sql)){
                  ?>
                <option value="<?=$data['nama_paket'] ?>"><?=$data['nama_paket'] ?></option>
                  <?php
                }
                ?>
              </select>
            </div>
            <div class="u-form-group u-form-group-5">
            <label for="text-a9d0" class="u-label">Jenis Sepatu</label>
            <select name="jenis" id="jenis" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                <option disabled selected >Pilih</option>
                <?php
                 $nb = mysqli_query($conn, "SELECT * FROM tb_jenis");
                while($bl=mysqli_fetch_array($nb)){
                  ?>
                <option value="<?=$bl['nama'] ?>"><?=$bl['nama'] ?></option>
                  <?php
                }
                ?>
              </select>
            </div>
            <div class="u-form-group u-form-group-6">
              <label for="text-8c7c" class="u-label">Tanggal Pesan</label>
              <input type="date" id="text-8c7c" name="tanggal" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
            </div>
            <div class="u-align-right u-form-group u-form-submit">
              <input type="submit" name="submit" value="submit" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-12 u-btn-1">
          </div>

          </form>


        </div>
        <div class="u-palette-1-base u-radius-50 u-shape u-shape-round u-shape-2"></div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-2cb2"><div class="u-clearfix u-sheet u-sheet-1"></div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/templates" target="_blank">
        <span>Free Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>