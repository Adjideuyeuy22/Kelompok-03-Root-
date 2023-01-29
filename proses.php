<?php
session_start();
include 'koneksi.php';

$username = $_POST['email'];
$pass = $_POST['pass'];
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($conn,"SELECT * FROM tb_registrasi WHERE email='$_POST[email]' AND pass='$_POST[pass]'");
$data = mysqli_fetch_array($result);
$cek = mysqli_num_rows($result);

if($cek > 0) {
	//menyimpan session user, nama, status dan id login
	$_SESSION['id_login'] = $data['id'];
	echo "<meta http-equiv='refresh' content='1; url=menu.php'>";
} else {
    echo "tidak masuk";
    echo "<meta http-equiv='refresh' content='1; url=index.php'>";
}

?>