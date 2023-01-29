<?php
include '../koneksi.php';

$del = mysqli_query($conn, "DELETE FROM tb_jenis WHERE id=$_GET[id]");

if($del){
    echo "<meta http-equiv='refresh' content='1; url=Jenis-sepatu.php'>";
}

?>