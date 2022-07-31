<?php require '../../connect_db.php'; ?>
<?php 
// mengaktifkan session php
session_start();

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data dengan username dan password yang sesuai
$data = mysqli_query($con,"select * from data_admin where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:../data_admin/index.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>