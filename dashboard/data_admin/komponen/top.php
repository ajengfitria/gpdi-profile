

<?php require '../../connect_db.php'; ?>
<?php 
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../auth/login.php");}
?>

<?php                                             
$query  = "SELECT * FROM konfigurasi WHERE id_konfigurasi=1";
$result  = mysqli_query($con,$query);
$results = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="Wita">
        <meta name="description" content="Website <?php echo $results['nama_website']; ?>." />
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta property="og:locale" content="id" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Website <?php echo $results['nama_website']; ?>." />
        <meta name="description" content="Website <?php echo $results['nama_website']; ?>." />
        <meta property="og:site_name" content="<?php echo $results['nama_website']; ?>." />
        <title>Dashboard Admin - <?php echo $results['nama_website']; ?></title>
        <link rel="icon" sizes="16x16" href="<?php echo $results['favicon_website']; ?>">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link href="https://andrepradika.github.io/adminlte3.0/static/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link href="https://andrepradika.github.io/adminlte3.0/static/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="https://andrepradika.github.io/adminlte3.0/static/plugins/icheck-bootstrap/icheck-bootstrap.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="https://andrepradika.github.io/adminlte3.0/static/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">
        <!-- Theme style -->
        <link href="https://andrepradika.github.io/adminlte3.0/static/dist/css/adminlte.min.css" rel="stylesheet">
        <!-- overlayScrollbars -->
        <link href="https://andrepradika.github.io/adminlte3.0/static/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" rel="stylesheet">
        <!-- Daterange picker -->
        <link href="https://andrepradika.github.io/adminlte3.0/static/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- summernote -->
        <link href="https://andrepradika.github.io/adminlte3.0/static/plugins/summernote/summernote-bs4.css" rel="stylesheet">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                    <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="data:image/png;base64,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" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" onClick="window.location.reload();" class="d-block">Dashboard Admin</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Data konfigurasi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_slider.php" class="nav-link">
                                <i class="nav-icon fab fa-slideshare"></i>
                                <p>
                                    Data slider
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_tk.php" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Tentang Kami
                                </p>
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a href="data_artalk.php" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Artikel Alkitab
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-plus"></i>
                            <p>
                                Departement
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="data_dep_rutemi.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rumah Terang Ministri</p>
                                </a>
                            </li>                          
                            </ul>
                        </li>     
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-plus"></i>
                            <p>
                                Info
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="data_khokeg.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Khotbah & Kegiatan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_uut.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ucapan Ulang Tahun</p>
                                </a>
                            </li>                            
                            </ul>
                        </li>  
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-plus"></i>
                            <p>
                                Pendataan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="data_pendataan_user.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="data_pendataan_jemaat.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Jemaat</p>
                                </a>
                            </li> 
                            <li class="nav-item">
                                <a href="data_pendataan_pernikahan.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pernikahan</p>
                                </a>
                            </li>   
                            <li class="nav-item">
                                <a href="data_pendataan_kelahiran.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kelahiran</p>
                                </a>
                            </li>                          
                            </ul>
                        </li> 
                        <li class="nav-item">
                            <a href="data_galeri.php" class="nav-link">
                                <i class="nav-icon fas fa-images"></i>
                                <p>
                                    Data galeri
                                </p>
                            </a>
                        </li>  
                        <li class="nav-item">
                            <a href="data_komentar.php" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Komentar dan Saran
                                </p>
                            </a>
                        </li>                                   
                        <li class="nav-item">
                            <a href="data_admin.php" class="nav-link">
                                <i class="nav-icon fas fa-user-lock"></i>
                                <p>
                                    Data admin
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../auth/logout.php" onClick="window.location.reload();" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

