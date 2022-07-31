<?php require '../../connect_db.php'; ?>

<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
?>

<?php 
$id_artalk     = $_GET['id_artalk'];
$query  = "SELECT * FROM hm_artalk WHERE id_artalk=$id_artalk";
$result  = mysqli_query($con,$query);
$results = mysqli_fetch_assoc($result);

unlink($results['gambar_artalk']);
$query      = "DELETE FROM hm_artalk WHERE id_artalk=$id_artalk";

mysqli_query ($con,$query);
header ('location:data_artalk.php');
?>