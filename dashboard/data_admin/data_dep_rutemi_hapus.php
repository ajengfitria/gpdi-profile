<?php require '../../connect_db.php'; ?>

<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
?>

<?php 
$id_rutemi     = $_GET['id_rutemi'];
$query  = "SELECT * FROM dep_rutemi WHERE id_rutemi=$id_rutemi";
$result  = mysqli_query($con,$query);
$results = mysqli_fetch_assoc($result);

unlink($results['gambar_rutemi']);
$query      = "DELETE FROM dep_rutemi WHERE id_rutemi=$id_rutemi";

mysqli_query ($con,$query);
header ('location:data_dep_rutemi.php');
?>