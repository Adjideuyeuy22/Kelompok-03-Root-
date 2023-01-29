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
        <label for="">Nama</label>
        <input type="text" name="nama" id="" placeholder="nama"><br>
        <input type="submit" value="tambah" name="tambah">
    </form>
    <?php
    include '../koneksi.php';
    
    if(isset($_POST['tambah'])){
        
    $x = $_POST['nama'];
    var_dump($x);
        $sql = mysqli_query($conn, "INSERT INTO tb_jenis VALUES(null, '$x')");
        if($sql){
            header('location:Jenis-sepatu.php');
        }else{
            echo "gagal";
        }
    }
    ?>
</body>
</html>