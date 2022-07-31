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
                                <h1>Tambah Data Pernikahan</h1>
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
                                               $tgl_pernikahan = $_POST['tgl_pernikahan'];
                                               $suami_nama_pernikahan = $_POST['suami_nama_pernikahan'];                                                                                              
                                               $suami_tmpt_lahir_pernikahan = $_POST['suami_tmpt_lahir_pernikahan'];
                                               $suami_tgl_lahir_pernikahan = $_POST['suami_tgl_lahir_pernikahan'];
                                        
                                               $istri_nama_pernikahan = $_POST['istri_nama_pernikahan'];
                                               $istri_tmpt_lahir_pernikahan = $_POST['istri_tmpt_lahir_pernikahan'];
                                               $istri_tgl_lahir_pernikahan = $_POST['istri_tgl_lahir_pernikahan'];

                                               $saksi_pernikahan = $_POST['saksi_pernikahan'];
                                               $id_user = $_SESSION['id_user'];                                                                                                                                      

                                               $ktp_suami_tmp = $_FILES['ktp_suami']['tmp_name'];
                                               $ktp_suami_name = $_FILES['ktp_suami']['name'];                                               
                                               $ktp_suami_destination = '../data_gambar/ktp_pernikahan/'.date('Ymdhi') . $ktp_suami_name;
                                               $ktp_suami_namanya = '../data_gambar/ktp_pernikahan/'.date('Ymdhi') . $ktp_suami_name;                                                
                                               move_uploaded_file($ktp_suami_tmp, $ktp_suami_destination); 

                                               $ktp_istri_tmp = $_FILES['ktp_istri']['tmp_name'];
                                               $ktp_istri_name = $_FILES['ktp_istri']['name'];                                               
                                               $ktp_istri_destination = '../data_gambar/ktp_pernikahan/'.date('Ymdhi') . $ktp_istri_name;
                                               $ktp_istri_namanya = '../data_gambar/ktp_pernikahan/'.date('Ymdhi') . $ktp_istri_name;                                                
                                               move_uploaded_file($ktp_istri_tmp, $ktp_istri_destination); 

                                               $query = "INSERT INTO data_pernikahan(tgl_pernikahan,suami_nama_pernikahan,suami_ktp_pernikahan,suami_tmpt_lahir_pernikahan,suami_tgl_lahir_pernikahan,istri_nama_pernikahan,istri_ktp_pernikahan,istri_tmpt_lahir_pernikahan,istri_tgl_lahir_pernikahan,saksi_pernikahan,id_user) values('$tgl_pernikahan','$suami_nama_pernikahan','$ktp_suami_namanya','$suami_tmpt_lahir_pernikahan','$suami_tgl_lahir_pernikahan','$istri_nama_pernikahan','$ktp_istri_namanya','$istri_tmpt_lahir_pernikahan','$istri_tgl_lahir_pernikahan','$saksi_pernikahan','$id_user')";
                                               $result = mysqli_query($con,$query);
                                               echo "
                                               <script type='text/javascript'>
                                               function load(){
                                                  window.location='data_pernikahan.php';
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
                                                    <h4 class="card-title">Tambah Data Pernikahan</h4>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form method="post" action="" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="tgl_pernikahan">Tanggal Pernikahan</label>
                                                            <input type="date" class="form-control" name="tgl_pernikahan" placeholder="Tanggal Pernikahn" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="suami_nama_pernikahan">Nama Suami</label>
                                                            <input type="text" class="form-control" name="suami_nama_pernikahan" placeholder="Nama Lengkap Suami" required>
                                                        </div>
                                                        <div class="form-group " >
                                                            <label for="ktp_suami">Foto KTP Suami</label><br>
                                                            <img id="thumbnil"  src="<?php echo $results['ktp_suami']; ?>" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
                                                            <input type="file" onchange="showMyImage(this)" class="form-control" name="ktp_suami" value="<?php $results['ktp_suami']; ?>" placeholder="img" required >
                                                        </div>                                                        
                                                        <div class="form-group">
                                                            <label for="suami_tmpt_lahir_pernikahan">Tempat Lahir Suami</label>
                                                            <input type="text" class="form-control" name="suami_tmpt_lahir_pernikahan" placeholder="Tempat Lahir Suami" required>
                                                        </div>     
                                                        <div class="form-group">
                                                            <label for="suami_tgl_lahir_pernikahan">Tanggal Lahir Suami</label>
                                                            <input type="date" class="form-control" name="suami_tgl_lahir_pernikahan" placeholder="Tanggal Lahir Suami" required>
                                                        </div>   
                                                        <div class="form-group">
                                                            <label for="istri_nama_pernikahan">Nama Istri</label>
                                                            <input type="text" class="form-control" name="istri_nama_pernikahan" placeholder="Nama Lengkap Istri" required>
                                                        </div>
                                                        <div class="form-group " >
                                                            <label for="ktp_istri">Foto KTP Istri</label><br>
                                                            <img id="thumbnil1"  src="<?php echo $results['ktp_istri']; ?>" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
                                                            <input type="file" onchange="showMyImage1(this)" class="form-control" name="ktp_istri" value="<?php $results['ktp_istri']; ?>" placeholder="img" required >
                                                        </div>                                                        
                                                        <div class="form-group">
                                                            <label for="istri_tmpt_lahir_pernikahan">Tempat Lahir Istri</label>
                                                            <input type="text" class="form-control" name="istri_tmpt_lahir_pernikahan" placeholder="Tempat Lahir Istri" required>
                                                        </div>     
                                                        <div class="form-group">
                                                            <label for="istri_tgl_lahir_pernikahan">Tanggal Lahir Istri</label>
                                                            <input type="date" class="form-control" name="istri_tgl_lahir_pernikahan" placeholder="Tanggal Lahir Istri" required>
                                                        </div>                                                 
                                                        <div class="form-group">
                                                            <label for="saksi_pernikahan">Saksi Pernikahan</label>
                                                            <input type="text" class="form-control" name="saksi_pernikahan" placeholder="Nama Lengkap Saksi Pernikahan" required>
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
