<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Edit Status</label>
        <input type="text" name="status" placeholder="status">
        <label for="">id</label>
        <input type="text" name="id" placeholder="id" value='<?=$_GET['id']?>'>
        <input type="submit" name="tombol" value="tombol">
    </form>
    <?php
    include '../koneksi.php';
    if(isset($_POST['tombol'])){
        $x = $_POST['id'];
        var_dump($_POST['id']);
        $sql = mysqli_query($conn, "UPDATE tb_order SET status='$_POST[status]'WHERE id_order='$_POST[id]'");
        if($sql){
            echo "<meta http-equiv='refresh' content='1; url=Data-Pesanan.php'>";
        }
    }else{
        echo "gagal";
    }
    
    ?>
</body>
</html>