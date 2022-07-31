

<?php include 'komponen/top.php';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <style>
                .tables {
                display:block;
                max-height : 280px;
                overflow-y : scroll;
                }
            </style>
            <!-- Content Wrapper. Contains page content -->
            <div class="container">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Update Data Galeri</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <!-- Main content -->
                                <div class="">
                                    <!-- Table row -->
                                    <div class="row">
                                        <?php
                                            if (!$_GET) {
                                               }
                                            else{ 
                                               $id_galeri    = $_GET['id_galeri'];
                                               $query  = "SELECT * FROM galeri WHERE id_galeri=$id_galeri";
                                               $result  = mysqli_query($con,$query);
                                               $results = mysqli_fetch_assoc($result);
                                            }
                                            ?>
                                        <?php 
                                            if(isset($_POST['update'])){
                                            
                                               $gambar_tmp = $_FILES['gambar']['tmp_name'];
                                               $gambar_name = $_FILES['gambar']['name'];
                                            
                                               if($gambar_name === ''){
                                            
                                                  $gambar_namanya = $results['gambar_galeri'];}
                                               else{
                                                    $file = $results['gambar_galeri'];
                                                    unlink($file);
                                                    $gambar_destination = '../data_gambar/galeri/'.date('Ymdhi'). $gambar_name;
                                                    $gambar_namanya = '../data_gambar/galeri/'.date('Ymdhi'). $gambar_name; 
                                                    move_uploaded_file($gambar_tmp, $gambar_destination);                                               
                                               }
                                            
                                               $query = "UPDATE galeri set gambar_galeri='$gambar_namanya'
                                               WHERE id_galeri = $id_galeri";
                                               $result = mysqli_query($con,$query);
                                               echo "
                                               <script type='text/javascript'>
                                               function load(){
                                                  window.location='data_galeri.php';
                                               }
                                               setTimeout('load()',100);
                                               </script>
                                               ";
                                            }
                                            ?>
                                        <div class="col-12">
                                            <!-- general form elements -->
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <h4 class="card-title">Update Data Galeri</h4>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form method="post" action="" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <div class="form-group " >
                                                            <label for="gambar">Gambar Galeri</label><br>
                                                            <img id="thumbnil"  src="<?php echo $results['gambar_galeri']; ?>" class="img-fluid" style="max-width:100px;max-height:100px"><br/>                                                       
                                                            <input type="file" onchange="showMyImage(this)" class="form-control" name="gambar" value="<?php $results['gambar_video']; ?>" placeholder="img" >
                                                        </div>
                                                    </div>
                                                    <!-- /.card-body -->
                                                    <div class="card-footer">                  
                                                        <input type="submit" name="update" value="Update" class="btn btn-secondary">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->                
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
                </div>
                <!-- /.content-wrapper --> 
                <script>
                    setInterval(function() {
                      $('#ajax').load(document.URL + ' #ajax');}, 100)
                      
                </script>
            </div>
            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'komponen/bottom.php';?>

