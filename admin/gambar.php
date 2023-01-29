<?php
include '../koneksi.php';
$sql  = mysqli_query($conn, "SELECT * FROM tb_order WHERE id_order='$_GET[id]'");
$data = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="../assets/<?=$data['bukti'] ?>" alt="">
</body>
</html>