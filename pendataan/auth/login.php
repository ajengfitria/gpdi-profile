

<?php require '../../connect_db.php'; ?>
<?php 
   if(isset($_GET['pesan'])){
   	if($_GET['pesan'] == "gagal"){
   		echo '<script type="text/javascript">alert("Username atau Password Salah");</script>';
   	}else if($_GET['pesan'] == "logout"){
   		echo '<script type="text/javascript">alert("Berhasil Logout");</script>';
   	}else if($_GET['pesan'] == "belum_login"){
   		echo '<script type="text/javascript">alert("Silahkan Login Dulu");</script>';
   	}
   }
   ?>
<?php                                             
$query  = "SELECT * FROM konfigurasi WHERE id_konfigurasi=1";
$result  = mysqli_query($con,$query);
$results = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="author" content="Maya">
      <meta name="description" content="Website Dashboard Pendataan." />
      <meta name="robots" content="index, follow" />
      <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
      <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
      <meta property="og:locale" content="id" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="Website Dashboard Pendataan." />
      <meta name="description" content="Website Dashboard Pendataan." />
      <meta property="og:site_name" content="Dashboard Pendataan." />
      <link rel="icon" sizes="16x16" href="../../dashboard/dashboard/<?php echo $results['favicon_website']; ?>">
      <title>Login Pendataan - Dashboard Pendataan</title>
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
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   </head>
   <body class="hold-transition login-page" style="background-image: url('../../../assets/img/Kepemudaan 3.jpeg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
      <div class="login-box">
         <div class="login-logo">               
         </div>
         <!-- /.login-logo -->
         <div class="card">
            <div class="card-body login-card-body">
               <h4>
                  <b>
                     <center>Login Dashboard <br> Jemaat, Kelahiran dan Pernikahan</center>
                  </b>
               </h4>
               <form method="post" action="cek_login.php" enctype="multipart/form-data">
                  <div class="form-group mb-3">
                     <input type="text" class="form-control" name="username" placeholder="Username">
                  </div>
                  <div class="form-group mb-3">
                     <input type="password" class="form-control" name="password" placeholder="Kata Sandi">
                  </div>
                  <!-- /.card-body -->
                  <div class="row">
                     <!-- /.col -->               
                     <div class="col-12">                  
                        <input type="submit" name="submit" value="Login" class="btn btn-secondary btn-block"></input>
                        <a href="../../index.php" class="btn btn-outline-secondary btn-block">Batal</a>  
                     </div>
                     <!-- /.col -->
                  </div>
               </form>               
            </div>
            <!-- /.login-card-body -->
         </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script src="https://andrepradika.github.io/adminlte3.0/static/plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="https://andrepradika.github.io/adminlte3.0/static/plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
         $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="https://andrepradika.github.io/adminlte3.0/static/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- ChartJS -->
      <script src="https://andrepradika.github.io/adminlte3.0/static/plugins/chart.js/Chart.min.js"></script>
      <!-- Sparkline -->
      <script src="https://andrepradika.github.io/adminlte3.0/static/plugins/sparklines/sparkline.js"></script>
      <!-- JQVMap -->
      <script src="https://andrepradika.github.io/adminlte3.0/static/plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="https://andrepradika.github.io/adminlte3.0/static/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
      <!-- jQuery Knob Chart -->
      <script src="https://andrepradika.github.io/adminlte3.0/static/plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="https://andrepradika.github.io/adminlte3.0/static/plugins/moment/moment.min.js"></script>
      <script src="https://andrepradika.github.io/adminlte3.0/static/plugins/daterangepicker/daterangepicker.js') }}"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="https://andrepradika.github.io/adminlte3.0/static/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Summernote -->
      <script src="https://andrepradika.github.io/adminlte3.0/static/plugins/summernote/summernote-bs4.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="https://andrepradika.github.io/adminlte3.0/static/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="https://andrepradika.github.io/adminlte3.0/static/dist/js/adminlte.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="https://andrepradika.github.io/adminlte3.0/static/dist/js/pages/dashboard.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="https://andrepradika.github.io/adminlte3.0/static/dist/js/demo.js"></script>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   </body>
</html>

