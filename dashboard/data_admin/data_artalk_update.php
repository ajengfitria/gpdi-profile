

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
                                <h1>Update Data Artikel Alkitab</h1>
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
                                               $id_artalk     = $_GET['id_artalk'];
                                               $query  = "SELECT * FROM hm_artalk WHERE id_artalk=$id_artalk";
                                               $result  = mysqli_query($con,$query);
                                               $results = mysqli_fetch_assoc($result);
                                            }
                                            ?>
                                        <?php 
                                            if(isset($_POST['update'])){
                                               $judul_artalk = $_POST['judul_artalk'];
                                               $judul_artalk = rtrim($judul_artalk);

                                               $isi_artalk = $_POST['isi_artalk'];
                                               $isi_artalk = str_replace("'", "",$isi_artalk);
                                               $isi_artalk = rtrim($isi_artalk);

                                               $gambar_tmp = $_FILES['gambar_artalk']['tmp_name'];
                                               $gambar_name = $_FILES['gambar_artalk']['name'];
                                            
                                               if($gambar_name === ''){
                                            
                                                  $gambar_namanya = $results['gambar_artalk'];}
                                               else{
                                                   $file = $results['gambar_artalk'];
                                                   unlink($file);
                                                   $gambar_destination = '../data_gambar/artalk/'.date('Ymdhi') . $gambar_name;
                                                   $gambar_namanya = '../data_gambar/artalk/'.date('Ymdhi') . $gambar_name; 
                                                   move_uploaded_file($gambar_tmp, $gambar_destination);                                               
                                               }
                                            
                                               $query = "UPDATE hm_artalk set judul_artalk='$judul_artalk', isi_artalk='$isi_artalk', gambar_artalk='$gambar_namanya'
                                               WHERE id_artalk = $id_artalk";
                                               $result = mysqli_query($con,$query);
                                               echo "
                                               <script type='text/javascript'>
                                               function load(){
                                                  window.location='data_artalk.php';
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
                                                    <h4 class="card-title">Update Data Artikel Alkitab</h4>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form method="post" action="" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="judul_artalk">Judul Artikel Alkitab</label>
                                                            <input type="text" class="form-control" name="judul_artalk" value="<?php echo $results['judul_artalk']; ?>" >
                                                        </div>
                                                        <div class="form-group " >
                                                            <label for="gambar_artalk">Gambar Artikel Alkitab</label><br>
                                                            <img id="thumbnil"  src="<?php echo $results['gambar_artalk']; ?>" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
                                                            <input type="file" onchange="showMyImage(this)" class="form-control" name="gambar_artalk" value="<?php $results['gambar_artalk']; ?>" placeholder="img" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="isi_artalk">Isi Artikel Alkitab</label>
                                                            <textarea class="textarea" name="isi_artalk" value="" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $results['isi_artalk']; ?></textarea>
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

