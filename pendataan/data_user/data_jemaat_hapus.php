<?php require '../../connect_db.php'; ?>

<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
?>

<?php 
$id_anggota     = $_GET['id_anggota'];
$query  = "SELECT * FROM data_anggota WHERE id_anggota=$id_anggota";
$result  = mysqli_query($con,$query);
$results = mysqli_fetch_assoc($result);

unlink($results['ktp_anggota']);
$query      = "DELETE FROM data_anggota WHERE id_anggota=$id_anggota";

mysqli_query ($con,$query);
header ('location:data_jemaat.php');
?>