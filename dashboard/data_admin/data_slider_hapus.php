<?php require '../../connect_db.php'; ?>

<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
?>

<?php 
$id_slider     = $_GET['id_slider'];
$query  = "SELECT * FROM slider WHERE id_slider=$id_slider";
$result  = mysqli_query($con,$query);
$results = mysqli_fetch_assoc($result);

unlink($results['gambar_slider']);

$query      = "DELETE FROM slider WHERE id_slider=$id_slider";

mysqli_query ($con,$query);
header ('location:data_slider.php');
?>