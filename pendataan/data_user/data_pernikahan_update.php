

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
                                <h1>Update Data Pernikahan</h1>
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
                                               $id_pernikahan     = $_GET['id_pernikahan'];
                                               $query  = "SELECT * FROM data_pernikahan WHERE id_pernikahan=$id_pernikahan";
                                               $result  = mysqli_query($con,$query);
                                               $results = mysqli_fetch_assoc($result);
                                            }
                                            ?>
                                        <?php 
                                            if(isset($_POST['update'])){
                                                $tgl_pernikahan = $_POST['tgl_pernikahan'];
                                                $suami_nama_pernikahan = $_POST['suami_nama_pernikahan'];                                                                                              
                                                $suami_tmpt_lahir_pernikahan = $_POST['suami_tmpt_lahir_pernikahan'];
                                                $suami_tgl_lahir_pernikahan = $_POST['suami_tgl_lahir_pernikahan'];
                                         
                                                $istri_nama_pernikahan = $_POST['istri_nama_pernikahan'];
                                                $istri_tmpt_lahir_pernikahan = $_POST['istri_tmpt_lahir_pernikahan'];
                                                $istri_tgl_lahir_pernikahan = $_POST['istri_tgl_lahir_pernikahan'];
 
                                                $saksi_pernikahan = $_POST['saksi_pernikahan'];
                                                $id_user = $_SESSION['id_user'];                                                                                                                                      
 
                                                $ktp_suami_tmp = $_FILES['suami_ktp_pernikahan']['tmp_name'];
                                                $ktp_suami_name = $_FILES['suami_ktp_pernikahan']['name'];   
                                                if($ktp_suami_name === ''){
                                                    $gambar_namanya = $results['suami_ktp_pernikahan'];}
                                                else{                                            
                                                    $ktp_suami_destination = '../data_gambar/ktp_pernikahan/'.date('Ymdhi') . $ktp_suami_name;
                                                    $ktp_suami_namanya = '../data_gambar/ktp_pernikahan/'.date('Ymdhi') . $ktp_suami_name;                                                
                                                    move_uploaded_file($ktp_suami_tmp, $ktp_suami_destination); 
                                                }
 
                                                $ktp_istri_tmp = $_FILES['istri_ktp_pernikahan']['tmp_name'];
                                                $ktp_istri_name = $_FILES['istri_ktp_pernikahan']['name'];                                               
                                                $ktp_istri_destination = '../data_gambar/ktp_pernikahan/'.date('Ymdhi') . $ktp_istri_name;
                                                $ktp_istri_namanya = '../data_gambar/ktp_pernikahan/'.date('Ymdhi') . $ktp_istri_name;                                                
                                                move_uploaded_file($ktp_istri_tmp, $ktp_istri_destination); 
                                                $query = "UPDATE data_pernikahan set tgl_pernikahan='$tgl_pernikahan', suami_nama_pernikahan='$suami_nama_pernikahan', suami_ktp_pernikahan='$ktp_suami_namanya', suami_tmpt_lahir_pernikahan='$suami_tmpt_lahir_pernikahan', suami_tgl_lahir_pernikahan='$suami_tgl_lahir_pernikahan', istri_nama_pernikahan='$istri_nama_pernikahan', istri_ktp_pernikahan='$ktp_istri_namanya', istri_tmpt_lahir_pernikahan='$istri_tmpt_lahir_pernikahan', istri_tgl_lahir_pernikahan='$istri_tgl_lahir_pernikahan', saksi_pernikahan='$saksi_pernikahan', id_user='$id_user' WHERE id_pernikahan='$id_pernikahan'";                                                
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
                                                    <h4 class="card-title">Update Data Pernikahan</h4>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form method="post" action="" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="tgl_pernikahan">Tanggal Lahir</label>
                                                            <input type="date" class="form-control" name="tgl_pernikahan" value="<?php echo $results['tgl_pernikahan']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="suami_nama_pernikahan">Nama Lengkap Suami</label>
                                                            <input type="text" class="form-control" name="suami_nama_pernikahan" value="<?php echo $results['suami_nama_pernikahan']; ?>" >
                                                        </div>
                                                        <div class="form-group " >
                                                            <label for="suami_ktp_pernikahan">Foto KTP Suami</label><br>
                                                            <img id="thumbnil"  src="<?php echo $results['suami_ktp_pernikahan']; ?>" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
                                                            <input type="file" onchange="showMyImage(this)" class="form-control" name="suami_ktp_pernikahan" value="<?php $results['suami_ktp_pernikahan']; ?>" placeholder="img" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="suami_tmpt_lahir_pernikahan">Tempat Lahir Suami</label>
                                                            <input type="text" class="form-control" name="suami_tmpt_lahir_pernikahan" value="<?php echo $results['suami_tmpt_lahir_pernikahan']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="suami_tgl_lahir_pernikahan">Tanggal Lahir Suami</label>
                                                            <input type="date" class="form-control" name="suami_tgl_lahir_pernikahan" value="<?php echo $results['suami_tgl_lahir_pernikahan']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="istri_nama_pernikahan">Nama Lengkap Istri</label>
                                                            <input type="text" class="form-control" name="istri_nama_pernikahan" value="<?php echo $results['istri_nama_pernikahan']; ?>" >
                                                        </div>
                                                        <div class="form-group " >
                                                            <label for="istri_ktp_pernikahan">Foto KTP Istri</label><br>
                                                            <img id="thumbnil1"  src="<?php echo $results['istri_ktp_pernikahan']; ?>" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
                                                            <input type="file" onchange="showMyImage1(this)" class="form-control" name="istri_ktp_pernikahan" value="<?php $results['istri_ktp_pernikahan']; ?>" placeholder="img" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="istri_tmpt_lahir_pernikahan">Tempat Lahir Istri</label>
                                                            <input type="text" class="form-control" name="istri_tmpt_lahir_pernikahan" value="<?php echo $results['istri_tmpt_lahir_pernikahan']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="istri_tgl_lahir_pernikahan">Tanggal Lahir Istri</label>
                                                            <input type="date" class="form-control" name="istri_tgl_lahir_pernikahan" value="<?php echo $results['istri_tgl_lahir_pernikahan']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="saksi_pernikahan">Saksi Pernikahan</label>
                                                            <input type="text" class="form-control" name="saksi_pernikahan" value="<?php echo $results['saksi_pernikahan']; ?>" >
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

