<?php                                             
$query  = "SELECT * FROM konfigurasi WHERE id_konfigurasi=1";
$result  = mysqli_query($con,$query);
$results = mysqli_fetch_assoc($result);
?>

<footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="index.php">Dashboard Admin - <?php echo $results['nama_website']; ?></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.1
    </div>
</footer>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-light">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
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
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(function () {
       // Summernote
       $('.textarea').summernote()})
</script>
<script>
    function showMyImage(fileInput) {
           var files = fileInput.files;
           for (var i = 0; i < files.length; i++) {           
               var file = files[i];
               var imageType = /image.*/;     
               if (!file.type.match(imageType)) {
                   continue;
               }           
               var img=document.getElementById("thumbnil");            
               img.file = file;    
               var reader = new FileReader();
               reader.onload = (function(aImg) { 
                   return function(e) { 
                       aImg.src = e.target.result; 
                   }; 
               })(img);
               reader.readAsDataURL(file);
           }    
       }
</script>
<script>
    function showMyImage1(fileInput) {
           var files = fileInput.files;
           for (var i = 0; i < files.length; i++) {           
               var file = files[i];
               var imageType = /image.*/;     
               if (!file.type.match(imageType)) {
                   continue;
               }           
               var img=document.getElementById("thumbnil1");            
               img.file = file;    
               var reader = new FileReader();
               reader.onload = (function(aImg) { 
                   return function(e) { 
                       aImg.src = e.target.result; 
                   }; 
               })(img);
               reader.readAsDataURL(file);
           }    
       }
</script>
</body>
</html>

