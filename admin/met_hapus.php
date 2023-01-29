<?php
include '../koneksi.php';

$del = mysqli_query($conn, "DELETE FROM tb_metode WHERE id_metode=$_GET[id]");

if($del){
    echo "<meta http-equiv='refresh' content='1; url=Data-Metode-bayar.php'>";
}

?>