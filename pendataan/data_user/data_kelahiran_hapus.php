

<?php require '../../connect_db.php'; ?>

<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
?>

<?php 
$id_kelahiran     = $_GET['id_kelahiran'];
$query  = "SELECT * FROM data_kelahiran WHERE id_kelahiran=$id_kelahiran";
$result  = mysqli_query($con,$query);
$results = mysqli_fetch_assoc($result);

unlink($results['surat_lampiran_kelahiran']);
$query      = "DELETE FROM data_kelahiran WHERE id_kelahiran=$id_kelahiran";

mysqli_query ($con,$query);
header ('location:data_kelahiran.php');
?>