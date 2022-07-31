<?php require '../../connect_db.php'; ?>

<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
?>

<?php 
$id_uut     = $_GET['id_uut'];
$query  = "SELECT * FROM info_uut WHERE id_uut=$id_uut";
$result  = mysqli_query($con,$query);
$results = mysqli_fetch_assoc($result);

unlink($results['gambar_uut']);
$query      = "DELETE FROM info_uut WHERE id_uut=$id_uut";

mysqli_query ($con,$query);
header ('location:data_uut.php');
?>