<?php require '../../connect_db.php'; ?>

<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
?>

<?php 
$id_pernikahan     = $_GET['id_pernikahan'];
$query  = "SELECT * FROM data_pernikahan WHERE id_pernikahan=$id_pernikahan";
$result  = mysqli_query($con,$query);
$results = mysqli_fetch_assoc($result);

unlink($results['suami_ktp_pernikahan']);
unlink($results['istri_ktp_pernikahan']);
$query      = "DELETE FROM data_pernikahan WHERE id_pernikahan=$id_pernikahan";

mysqli_query ($con,$query);
header ('location:data_pernikahan.php');
?>