<?php require '../../connect_db.php'; ?>

<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
?>

<?php 
$id_galeri     = $_GET['id_galeri'];

$query  = "SELECT * FROM galeri WHERE id_galeri=$id_galeri";
$result  = mysqli_query($con,$query);
$results = mysqli_fetch_assoc($result);

$file = $results['gambar_galeri'];
unlink($file);

$query      = "DELETE FROM galeri WHERE id_galeri=$id_galeri";
mysqli_query ($con,$query);
header ('location:data_galeri.php');
?>