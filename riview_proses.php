<?php
include 'koneksi.php';
$id = $_GET['id'];
$nama = $_POST['nama'];
$review = $_POST['review'];

$x = mysqli_query($conn, "INSERT INTO tb_review VALUES('$id','$nama','$review')");
if($x){
    header("location:menu.php?id=$id");
 
}
?>