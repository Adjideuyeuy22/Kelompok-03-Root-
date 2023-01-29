<?php
session_start();
include 'koneksi.php';
  $sql = mysqli_query($conn, "SELECT nama_pengguna FROM tb_registrasi WHERE id = '$_GET[id]'");
  $id = $_GET['id'];
  $data = mysqli_fetch_array($sql);
?>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>menu</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="menu.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 5.3.6, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">


  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": ""
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="menu">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">
  <header class="u-clearfix u-custom-color-2 u-header u-header" id="sec-c9cd">
    <div
      class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
      <p class="u-custom-font u-text u-text-custom-color-3 u-text-default u-text-1">SEPATOE'S</p>
      <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1.125rem; letter-spacing: 0px; font-weight: 400;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
            href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a
                class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base"
                href="menu.php?id=<?=$id ?>" style="padding: 10px 20px;">Home</a>
            </li>
            <li class="u-nav-item"><a
                class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base"
                href="Order.php?id=<?=$id ?>" style="padding: 10px 20px;">Order</a>
            </li>
            <li class="u-nav-item"><a
                class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base"
                href="Layanan.php?id=<?=$id ?>" style="padding: 10px 20px;">Layanan</a>
            </li>
            <li class="u-nav-item"><a
                class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base"
                href="pesanan.php?id=<?=$id ?>" style="padding: 10px 20px;">Pesanan</a>
            </li>
            <li class="u-nav-item"><a
                class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base"
                href="riwayat.php?id=<?=$id ?>" style="padding: 10px 20px;">Riwayat</a>
            </li>
            <li class="u-nav-item"><a
                class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base"
                href="riview.php?id=<?=$id ?>" style="padding: 10px 20px;">Review</a>
            </li>
            <li class="u-nav-item"><a
                class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base"
                href="index.php" style="padding: 10px 20px;">Log Out</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="menu.php?id=<?=$id ?>">Home</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Order.php?id=<?=$id ?>">Order</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Layanan.php?id=<?=$id ?>">Layanan</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="pesanan.php?id=<?=$id ?>">Pesanan</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="riwayat.php?id=<?=$id ?>">Riwayat</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="riview.php?id=<?=$id ?>">Review</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Log Out</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>
  <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-9cb9">
    <div class="u-border-3 u-border-custom-color-3 u-line u-line-vertical u-line-1"></div>
    <div class="u-border-3 u-border-grey-dark-1 u-line u-line-vertical u-line-2"></div>
    <div class="u-custom-color-2 u-radius-50 u-shape u-shape-round u-shape-1"></div>
    <p class="u-custom-font u-text u-text-custom-color-3 u-text-default u-text-1"> Halo ‘‘
      <?= $data['nama_pengguna']?>” <br>Selamat datang di<br>Sepatoe’S!
    </p>
    <p class="u-custom-font u-text u-text-custom-color-3 u-text-default u-text-2">Home</p>
    <div class="u-custom-color-2 u-radius-50 u-shape u-shape-round u-shape-2"></div>
    <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-layout-cell u-size-33 u-layout-cell-1">
            <div class="u-container-layout u-container-layout-1">
              <p class="u-custom-font u-text u-text-custom-color-3 u-text-3">About Us</p>
              <div class="u-custom-color-3 u-radius-50 u-shape u-shape-round u-shape-3"></div>
              <div class="fr-view u-clearfix u-rich-text u-text u-text-4">
                <p style="text-align: justify;">
                  <span style="line-height: 2.0;">Layanan Laundry sepatu kami Tidak hanya mencuci sepatu 
                  anda Tetapi juga Kami dapat juga memperbaiki Sepatu anda, kami akan menjemput, membersihkan dan
                   memperbaiki serta melakukan perawatan lembut kepada sepatu kesayangan anda, anda juga hanya perlu menunggu 
                   dirumah, sepatu anda akan kami antar kembali dalam keadaan seperti baru, kami juga melayani kerja ditempat 
                   agar anda dapat Melihat hasil kami.</span>
                </p>
              </div>
            </div>
          </div>
          <div class="u-container-style u-layout-cell u-size-27 u-layout-cell-2">
            <div class="u-container-layout u-container-layout-2">
              <img class="u-image u-image-contain u-image-default u-image-1" src="images/bgadjid.png" alt=""
                data-image-width="331" data-image-height="391">
              <div class="u-border-3 u-border-custom-color-3 u-line u-line-vertical u-line-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="u-container-style u-expanded-width u-group u-group-1">
      <div class="u-container-layout u-container-layout-3">
        <p class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-5">Layanan Kami</p>
        <div class="u-align-center u-custom-color-3 u-radius-50 u-shape u-shape-round u-shape-4"></div>
      </div>
    </div>
    <div class="u-clearfix u-expanded-width-xl u-layout-wrap u-layout-wrap-2">
      <div class="u-layout">
        <div class="u-layout-row">
          <div
            class="u-container-style u-layout-cell u-size-20-xl u-size-21-lg u-size-21-md u-size-21-sm u-size-21-xs u-layout-cell-3">
            <div class="u-container-layout u-container-layout-4">
              <div class="u-container-style u-custom-color-2 u-group u-radius-50 u-shape-round u-group-2">
                <div class="u-container-layout u-container-layout-5">
                  <img class="u-image u-image-contain u-image-default u-image-2" src="images/image9.png" alt=""
                    data-image-width="279" data-image-height="199">
                  <h4 class="u-custom-font u-text u-text-custom-color-3 u-text-default u-text-6">Paket 1,A</h4>
                  <p class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-default u-text-7">
                    Membersihkan Sepatu anda<br>Kerja dikantor
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div
            class="u-container-style u-layout-cell u-size-19-lg u-size-19-md u-size-19-sm u-size-19-xs u-size-20-xl u-layout-cell-4">
            <div class="u-container-layout u-valign-top-xl u-container-layout-6">
              <div class="u-container-style u-custom-color-2 u-group u-radius-50 u-shape-round u-group-3">
                <div class="u-container-layout u-container-layout-7">
                  <img class="u-image u-image-contain u-image-default u-image-3" src="images/image13.png" alt=""
                    data-image-width="269" data-image-height="204">
                  <h4 class="u-custom-font u-text u-text-custom-color-3 u-text-default u-text-8">Paket 1,B</h4>
                  <p class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-9"> Memperbaiki &amp;
                    membersihkan sepatu anda Dikantor</p>
                </div>
              </div>
            </div>
          </div>
          <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-5">
            <div
              class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-valign-top-xl u-container-layout-8">
              <div class="u-container-style u-custom-color-2 u-group u-radius-50 u-shape-round u-group-4">
                <div class="u-container-layout u-container-layout-9">
                  <img class="u-image u-image-contain u-image-4" src="images/image8.png" data-image-width="306"
                    data-image-height="231">
                  <h4 class="u-custom-font u-text u-text-custom-color-3 u-text-default u-text-10">Paket 1,C</h4>
                  <p class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-default u-text-11">
                    Memperbaiki sepatu anda<br>Kerja dikantor
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="u-clearfix u-layout-wrap u-layout-wrap-3">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-6">
            <div class="u-container-layout u-container-layout-10">
              <div class="u-container-style u-custom-color-2 u-group u-radius-50 u-shape-round u-group-5">
                <div class="u-container-layout u-container-layout-11">
                  <img class="u-image u-image-contain u-image-default u-image-5" src="images/image9.png" alt=""
                    data-image-width="279" data-image-height="199">
                  <h4 class="u-custom-font u-text u-text-custom-color-3 u-text-default u-text-12">Paket 2,A</h4>
                  <p class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-default u-text-13">
                    Membersihkan Sepatu anda<br>Kerja dikantor
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-7">
            <div class="u-container-layout u-valign-top-xl u-container-layout-12">
              <div class="u-container-style u-custom-color-2 u-group u-radius-50 u-shape-round u-group-6">
                <div class="u-container-layout u-container-layout-13">
                  <img class="u-image u-image-contain u-image-default u-image-6" src="images/image13.png" alt=""
                    data-image-width="269" data-image-height="204">
                  <h4 class="u-custom-font u-text u-text-custom-color-3 u-text-default u-text-14">Paket 2,B</h4>
                  <p class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-15"> Memperbaiki &amp;
                    membersihkan sepatu anda Dikantor</p>
                </div>
              </div>
            </div>
          </div>
          <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-8">
            <div class="u-container-layout u-valign-top u-container-layout-14">
              <div class="u-container-style u-custom-color-2 u-group u-radius-50 u-shape-round u-group-7">
                <div class="u-container-layout u-container-layout-15">
                  <img class="u-image u-image-contain u-image-7" src="images/image8.png" data-image-width="306"
                    data-image-height="231">
                  <h4 class="u-custom-font u-text u-text-custom-color-3 u-text-default u-text-16">Paket 2,C</h4>
                  <p class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-default u-text-17">
                    Memperbaiki sepatu anda<br>Kerja dikantor
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="u-container-style u-group u-group-8">
      <div class="u-container-layout u-valign-middle u-container-layout-16">
        <a href="layanan.php?id=<?=$id ?>"
          class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-hover-palette-1-light-1 u-radius-6 u-btn-1">LAYANAN</a>
      </div>
    </div>
  </section>


  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-2cb2">
    <div class="u-clearfix u-sheet u-sheet-1"></div>
  </footer>
  <section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/website-design" target="_blank">
      <span>Website Design</span>
    </a>
    <p class="u-text">
      <span>created with</span>
    </p>
    <a class="u-link" href="https://nicepage.com/website-builder" target="_blank">
      <span>Website Builder</span>
    </a>.
  </section>

</body>

</html>