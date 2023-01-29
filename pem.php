<?php
include 'koneksi.php';
$x = $_POST['id'];
$sumber = @$_FILES['file']['tmp_name'];
$target = 'assets/';
$nama_file = @$_FILES['file']['name'];
$pindah = move_uploaded_file($sumber,$target.$nama_file);
if ($pindah) {
    $sql = mysqli_query($conn, "UPDATE tb_order set metode='$_POST[meto]', bukti='$nama_file', transaksi='dibayar' where id_order='$x'");
    $cek = mysqli_query($conn, "SELECT id FROM tb_order WHERE id_order='$x'");
    $z = mysqli_fetch_assoc($cek);
    if ($sql) {
        header("location:pesanan.php?id=$z[id]");
        
    }
}
?>