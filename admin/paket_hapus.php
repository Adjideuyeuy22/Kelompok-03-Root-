<?php
include '../koneksi.php';

$del = mysqli_query($conn, "DELETE FROM tb_paket WHERE id_paket=$_GET[id]");

if($del){
    echo "<meta http-equiv='refresh' content='1; url=Data-paket.php'>";
}

?>