<?php require '../../connect_db.php'; ?>

<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
?>

<?php 
$id_khokeg     = $_GET['id_khokeg'];
$query      = "DELETE FROM info_khokeg WHERE id_khokeg=$id_khokeg";
mysqli_query ($con,$query);
header ('location:data_khokeg.php');
?>
