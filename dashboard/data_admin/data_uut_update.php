

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
                                <h1>Update Data Ucapan Ulang Tahun</h1>
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
                                               $id_uut     = $_GET['id_uut'];
                                               $query  = "SELECT * FROM info_uut WHERE id_uut=$id_uut";
                                               $result  = mysqli_query($con,$query);
                                               $results = mysqli_fetch_assoc($result);
                                            }
                                            ?>
                                        <?php 
                                            if(isset($_POST['update'])){
                                               $judul_uut = $_POST['judul_uut'];
                                               $judul_uut = rtrim($judul_uut);

                                               $isi_uut = $_POST['isi_uut'];
                                               $isi_uut = str_replace("'", "",$isi_uut);
                                               $isi_uut = rtrim($isi_uut);

                                               $gambar_tmp = $_FILES['gambar_uut']['tmp_name'];
                                               $gambar_name = $_FILES['gambar_uut']['name'];
                                            
                                               if($gambar_name === ''){
                                            
                                                  $gambar_namanya = $results['gambar_uut'];}
                                               else{
                                                   $file = $results['gambar_uut'];
                                                   unlink($file);
                                                   $gambar_destination = '../data_gambar/uut/'.date('Ymdhi') . $gambar_name;
                                                   $gambar_namanya = '../data_gambar/uut/'.date('Ymdhi') . $gambar_name; 
                                                   move_uploaded_file($gambar_tmp, $gambar_destination);                                               
                                               }
                                            
                                               $query = "UPDATE info_uut set judul_uut='$judul_uut', isi_uut='$isi_uut', gambar_uut='$gambar_namanya'
                                               WHERE id_uut = $id_uut";
                                               $result = mysqli_query($con,$query);
                                               echo "
                                               <script type='text/javascript'>
                                               function load(){
                                                  window.location='data_uut.php';
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
                                                    <h4 class="card-title">Update Data Ucapan Ulang Tahun</h4>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form method="post" action="" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="judul_uut">Judul Ucapan Ulang Tahun</label>
                                                            <input type="text" class="form-control" name="judul_uut" value="<?php echo $results['judul_uut']; ?>" >
                                                        </div>
                                                        <div class="form-group " >
                                                            <label for="gambar_uut">Gambar Ucapan Ulang Tahun</label><br>
                                                            <img id="thumbnil"  src="<?php echo $results['gambar_uut']; ?>" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
                                                            <input type="file" onchange="showMyImage(this)" class="form-control" name="gambar_uut" value="<?php $results['gambar_uut']; ?>" placeholder="img" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="isi_uut">Isi Ucapan Ulang Tahun</label>
                                                            <textarea class="textarea" name="isi_uut" value="" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $results['isi_uut']; ?></textarea>
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

