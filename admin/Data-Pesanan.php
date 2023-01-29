<?php
include '../koneksi.php';

$sql = mysqli_query($conn, "SELECT * FROM tb_order ");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Sepatoe'S</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #9FA8E7;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Sepatoe'S</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav" style="background-color: #C7C6F3;">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color: #9FA8E7;">
                    <div class="sb-sidenav-menu">
                        <div class="nav" >
                            <div class="sb-sidenav-menu-heading" style="color: black;">Core</div>
                            <a class="nav-link" href="index.html" style="color: black;">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="color: black;"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading" style="color: black;">Interface</div>
                            <a class="nav-link" href="Data-pelanggan.html" style="color: black;">
                                <div class="sb-nav-link-icon"><i class="fas fa-user" style="color: black;"></i></div>
                                Data Pelanggan
                            </a>
                            <a class="nav-link" href="Data-paket.php" style="color: black;">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-bar" style="color: black;"></i></div>
                                Data Paket
                            </a>
                            <a class="nav-link" href="Jenis-sepatu.php"style="color: black;">
                                <div class="sb-nav-link-icon"><i class="fas fa-bars"style="color: black;"></i></div>
                                Jenis Sepatu
                            </a>
                            <a class="nav-link" href="Data-Pesanan.php"style="color: black;">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"style="color: black;"></i></div>
                                Data Pesanan
                            </a>
                            <a class="nav-link" href="Metode-bayar.php"style="color: black;">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"style="color: black;"></i></div>
                                Metode Bayar
                            </a>
                            <a class="nav-link" href="Review-pelanggan.php"style="color: black;">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"style="color: black;"></i></div>
                                Review Pelanggan
                            </a>
                        </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Pesanan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Interface</li>
                        </ol>
                        
                        <div class="card mb-4" style="color: black;">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama Pesanan</th>
                                            <th>Alamat Pesanan</th>
                                            <th>No. HP</th>
                                            <th>Paket & Metode</th>
                                            <th>Jenis Sepatu</th>
                                            <th>Tanggal Pesan</th>
                                            <th>Status Pesanan</th>
                                            <th>Status</th>
                                            <th>Bukti</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                    foreach ($sql as $s){
                                        ?>
                                        <tr>
                                            <td><?=$s['nama_pemesan']?></td>
                                            <td><?=$s['alamat_pemesan']?></td>
                                            <td><?=$s['nomor_hp_pemesan']?></td>
                                            <td><?=$s['paket']?></td>
                                            <td><?=$s['jenis_sepatu']?></td>
                                            <td><?=$s['tanggal']?></td>
                                            <td><?=$s['status']?></td>
                                            <td><a href="gambar.php?id=<?=$s['id_order'] ?>"><img src="../assets/<?=$s['bukti']?>" alt="" width="30" height="40"></a></td>
                                            <td><a href="proses_pesan.php?id=<?=$s['id_order']?>">edit</a> | <a href="hapus_pesan.php?id=<?=$s['id_order']?>">Hapus</a></td>
                                        </tr>
                                        <?php
                                    }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
