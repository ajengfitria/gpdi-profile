<?php require '../../connect_db.php'; ?>

<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
?>

<?php 
$id_user     = $_GET['id_user'];
$query      = "DELETE FROM data_user WHERE id_user=$id_user";
mysqli_query ($con,$query);
header ('location:data_pendataan_user.php');
?>
