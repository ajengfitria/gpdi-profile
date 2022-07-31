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
                                <h1>Tambah Data Artikel Alkitab</h1>
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
                                            if(isset($_POST['submit'])){
                                               $judul_artalk = $_POST['judul_artalk'];
                                               $judul_artalk = rtrim($judul_artalk);
                                               
                                               $isi_artalk = $_POST['isi_artalk'];
                                               $isi_artalk = str_replace("'", "",$isi_artalk);
                                               $isi_artalk = rtrim($isi_artalk);
                                               $gambar_tmp = $_FILES['gambar_artalk']['tmp_name'];
                                               $gambar_name = $_FILES['gambar_artalk']['name'];                                               
                                               $gambar_destination = '../data_gambar/artalk/'.date('Ymdhi') . $gambar_name;
                                               $gambar_namanya = '../data_gambar/artalk/'.date('Ymdhi') . $gambar_name; 
                                               move_uploaded_file($gambar_tmp, $gambar_destination);                                               
                                               $query = "INSERT INTO hm_artalk(judul_artalk,gambar_artalk,isi_artalk) values('$judul_artalk','$gambar_namanya','$isi_artalk')";
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
                                                    <h4 class="card-title">Tambah Data Artikel Alkitab</h4>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form method="post" action="" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="judul_artalk">Judul Artikel Alkitab</label>
                                                            <input type="text" class="form-control" name="judul_artalk" placeholder="Judul Artikel Alkitab" required>
                                                        </div>
                                                        <div class="form-group " >
                                                            <label for="gambar_artalk">Gambar Artikel Alkitab</label><br>
                                                            <img id="thumbnil"  src="<?php echo $results['gambar_artalk']; ?>" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
                                                            <input type="file" onchange="showMyImage(this)" class="form-control" name="gambar_artalk" value="<?php $results['gambar_artalk']; ?>" placeholder="img" required >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="isi_artalk">Isi Artikel Alkitab</label>
                                                            <textarea class="textarea" name="isi_artalk" value="" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-body -->
                                                    <div class="card-footer">                  
                                                        <input type="submit" name="submit" value="Submit" class="btn btn-secondary">
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
