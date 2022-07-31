

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
                                <h1>Update Data Rumah Terang Ministri</h1>
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
                                               $id_rutemi     = $_GET['id_rutemi'];
                                               $query  = "SELECT * FROM dep_rutemi WHERE id_rutemi=$id_rutemi";
                                               $result  = mysqli_query($con,$query);
                                               $results = mysqli_fetch_assoc($result);
                                            }
                                            ?>
                                        <?php 
                                            if(isset($_POST['update'])){
                                               $judul_rutemi = $_POST['judul_rutemi'];
                                               $judul_rutemi = rtrim($judul_rutemi);

                                               $isi_rutemi = $_POST['isi_rutemi'];
                                               $isi_rutemi = str_replace("'", "",$isi_rutemi);
                                               $isi_rutemi = rtrim($isi_rutemi);

                                               $gambar_tmp = $_FILES['gambar_rutemi']['tmp_name'];
                                               $gambar_name = $_FILES['gambar_rutemi']['name'];
                                            
                                               if($gambar_name === ''){
                                            
                                                  $gambar_namanya = $results['gambar_rutemi'];}
                                               else{
                                                   $file = $results['gambar_rutemi'];
                                                   unlink($file);
                                                   $gambar_destination = '../data_gambar/rutemi/'.date('Ymdhi') . $gambar_name;
                                                   $gambar_namanya = '../data_gambar/rutemi/'.date('Ymdhi') . $gambar_name; 
                                                   move_uploaded_file($gambar_tmp, $gambar_destination);                                               
                                               }
                                            
                                               $query = "UPDATE dep_rutemi set judul_rutemi='$judul_rutemi', isi_rutemi='$isi_rutemi', gambar_rutemi='$gambar_namanya'
                                               WHERE id_rutemi = $id_rutemi";
                                               $result = mysqli_query($con,$query);
                                               echo "
                                               <script type='text/javascript'>
                                               function load(){
                                                  window.location='data_dep_rutemi.php';
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
                                                    <h4 class="card-title">Update Data Rumah Terang Ministri</h4>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form method="post" action="" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="judul_rutemi">Judul Rumah Terang Ministri</label>
                                                            <input type="text" class="form-control" name="judul_rutemi" value="<?php echo $results['judul_rutemi']; ?>" >
                                                        </div>
                                                        <div class="form-group " >
                                                            <label for="gambar_rutemi">Gambar Rumah Terang Ministri</label><br>
                                                            <img id="thumbnil"  src="<?php echo $results['gambar_rutemi']; ?>" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
                                                            <input type="file" onchange="showMyImage(this)" class="form-control" name="gambar_rutemi" value="<?php $results['gambar_rutemi']; ?>" placeholder="img" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="isi_rutemi">Isi Rumah Terang Ministri</label>
                                                            <textarea class="textarea" name="isi_rutemi" value="" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $results['isi_rutemi']; ?></textarea>
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
