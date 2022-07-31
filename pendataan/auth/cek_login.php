<?php require '../../connect_db.php'; ?>
<?php 
// mengaktifkan session php
session_start();

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data dengan username dan password yang sesuai
$data = mysqli_query($con,"select * from data_user where username_user='$username' and password_user='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$results = mysqli_fetch_assoc($data);
if($cek > 0){
	$_SESSION['id_user'] = $results["id_user"];
	$_SESSION['status'] = "login";
	header("location:../data_user/index.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>