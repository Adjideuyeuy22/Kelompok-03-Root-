<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$nama_1 = $_POST['nama_1'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$password = $_POST['password'];
$sql = mysqli_query($conn, "INSERT INTO tb_registrasi VALUES(null,'$nama','$nama_1','$email','$nohp','$password')");

if($sql){
    echo "<meta http-equiv='refresh' content='1; url=index.php'>";
 
}
?>