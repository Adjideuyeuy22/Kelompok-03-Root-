<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nama_1 = $_POST['nohp'];
    $email = $_POST['alamat'];
    $nohp = $_POST['paket'];
    $x = mysqli_query($conn, "SELECT harga FROM tb_paket WHERE nama_paket='$_POST[paket]' ");
    $y = mysqli_fetch_array($x);
    $password = $_POST['jenis'];
    $tanggal = $_POST['tanggal'];
    $sql = mysqli_query($conn, "INSERT INTO tb_order VALUES(null,'$id','$nama','$nama_1','$email','$nohp','$y[harga]','$password','$tanggal','blm terselesaikan','','','')");

    if ($sql) {
       
        header("location:pesanan.php?id=$id");
    }
}
?>

