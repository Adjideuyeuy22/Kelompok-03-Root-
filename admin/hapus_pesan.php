<?php
include '../koneksi.php';

$del = mysqli_query($conn, "DELETE FROM tb_order WHERE id_order=$_GET[id]");

if($del){
    echo "<meta http-equiv='refresh' content='1; url=Data-Pesanan.php'>";
}

?>