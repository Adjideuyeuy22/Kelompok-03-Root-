<?php
include 'koneksi.php';
$sql = mysqli_query($conn, "SELECT * FROM tb_order WHERE id='$_GET[id]'  AND status='blm terselesaikan' OR status='diproses'");
$id = $_GET['id'];
$data = mysqli_fetch_array($sql);
$x = mysqli_num_rows($sql);
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>pesanan</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="pesanan.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.3.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="pesanan">
    <meta property="og:type" content="website">
    <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <!-- import bootstrap  -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
                    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            
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
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="menu.php?id=<?=$id?>">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Order.php?id=<?=$id?>">Order</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Layanan.php?id=<?=$id?>">Layanan</a>
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
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-1b41">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-custom-color-2 u-expanded-width u-radius-50 u-shape u-shape-round u-shape-1"></div>
        <p class="u-custom-font u-text u-text-custom-color-3 u-text-default u-text-1">Pesanan</p>
        <p class="u-custom-font u-text u-text-custom-color-3 u-text-default u-text-2">Pesanan Saya</p>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity">
            <colgroup>
              <col width="7.1%">
              <col width="14.9%">
              <col width="11%">
              <col width="11%">
              <col width="11.3%">
              <col width="10.8%">
              <col width="11.7%">
              <col width="11%">
              <col width="11.2%">
            </colgroup>
            <tbody class="u-align-center u-table-body u-table-body-1">
              <tr style="height: 67px;">
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Id<br>Pemesan
                </td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Nama<br>Pemesan
                </td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Alamat<br>Pemesan
                </td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Pilih Paket</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Tanggal<br>Pesan
                </td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Harga<br>Paket
                </td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Status<br>Pesanan
                </td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Status<br>&nbsp;Transaksi
                </td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Pembayaran</td>
              </tr>
              <?php
              foreach ($sql as $s) {


                ?>
              <tr style="height: 58px;">
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?= $s['id_order'] ?></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?= $s['nama_pemesan'] ?></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?= $s['alamat_pemesan'] ?></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?= $s['paket'] ?></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?= $s['tanggal'] ?></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?= $s['harga'] ?></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?= $s['status'] ?></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?= $s['transaksi'] ?></td>
                
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-5 u-hover-palette-1-light-1 u-radius-6 u-btn-1"> 
                  <!-- membuat tombol dengan ukuran small berwarna biru  -->
                                                <!-- data-target setiap modal harus berbeda, karena akan menampilkan data yang berbeda pula
                                                caranya membedakannya, gunakan id_barang sebagai pembeda data-target di setiap modal -->
                                                <a href="" class="btn btn-sm btn-info" data-toggle="modal"
                                                    data-target="#modal<?php echo $s['id_order']; ?>">Bayar</a>
                
                                                <!-- untuk melihat bentuk-bentuk modal kalian bisa mengunjungi laman bootstrap dan cari modal di kotak pencariannya -->
                                                <!-- id setiap modal juga harus berbeda, cara membedakannya dengan menggunakan id_barang -->
                                                <div class="modal fade" id="modal<?php echo $s['id_order']; ?>" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Form Pembayaran</h5>
                                                                <button type="button" class="close" s-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                          
                                                            <div class="modal-body">
                                                                <form action="pem.php" method="post"  enctype="multipart/form-data">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlInput1">ID ORDER</label>
                                                                        <input type="text" name="id" class="form-control"
                                                                           value="<?php echo $s['id_order']; ?>">
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlInput1">PAKET</label>
                                                                        <input type="text" class="form-control"
                                                                           value="<?php echo $s['paket']; ?>">
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlInput1">METODE PEMBAYARAN</label><br>
                                                                        
                                                                         
                                                                        <select class="form-control" name="meto">
                                                                        <?php
                                                                          $sql = mysqli_query($conn, "SELECT * FROM tb_metode");
                                                                        while ($data = mysqli_fetch_array($sql)) {
                                                                          ?>
                                                                          <option value="<?= $data['nama'] ?>"><?= $data['nama'] ?></option>
                                                                          <?php
                                                                        }
                                                                          ?>
                                                                        </select>                                                                
                                                                          </div>
                                                                                                                              
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlInput1">bukti </label>
                                                                        <input type="file" name="file" class="form-control"
                                                                            >
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                <input type="submit" name ="kirim" class="btn btn-primary" value="BYAR">
                                                            </div>
                                                                </form>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
              </tr>
              <?php
              }
              ?>
             
            </tbody>
          </table>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-2cb2"><div class="u-clearfix u-sheet u-sheet-1"></div></footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
                    </script>
</body>
</html>