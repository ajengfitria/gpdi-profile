

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
                                            if(isset($_POST['kembali'])){
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
                                                            <input disabled type="date" class="form-control" name="tgl_pernikahan" value="<?php echo $results['tgl_pernikahan']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="suami_nama_pernikahan">Nama Lengkap Suami</label>
                                                            <input disabled type="text" class="form-control" name="suami_nama_pernikahan" value="<?php echo $results['suami_nama_pernikahan']; ?>" >
                                                        </div>
                                                        <div class="form-group " >
                                                            <label for="suami_ktp_pernikahan">Foto KTP Suami</label><br>
                                                            <img id="thumbnil"  src="<?php echo $results['suami_ktp_pernikahan']; ?>" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
                                                            <input disabled type="file" onchange="showMyImage(this)" class="form-control" name="suami_ktp_pernikahan" value="<?php $results['suami_ktp_pernikahan']; ?>" placeholder="img" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="suami_tmpt_lahir_pernikahan">Tempat Lahir Suami</label>
                                                            <input disabled type="text" class="form-control" name="suami_tmpt_lahir_pernikahan" value="<?php echo $results['suami_tmpt_lahir_pernikahan']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="suami_tgl_lahir_pernikahan">Tanggal Lahir Suami</label>
                                                            <input disabled type="date" class="form-control" name="suami_tgl_lahir_pernikahan" value="<?php echo $results['suami_tgl_lahir_pernikahan']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="istri_nama_pernikahan">Nama Lengkap Istri</label>
                                                            <input disabled type="text" class="form-control" name="istri_nama_pernikahan" value="<?php echo $results['istri_nama_pernikahan']; ?>" >
                                                        </div>
                                                        <div class="form-group " >
                                                            <label for="istri_ktp_pernikahan">Foto KTP Istri</label><br>
                                                            <img id="thumbnil1"  src="<?php echo $results['istri_ktp_pernikahan']; ?>" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
                                                            <input disabled type="file" onchange="showMyImage1(this)" class="form-control" name="istri_ktp_pernikahan" value="<?php $results['istri_ktp_pernikahan']; ?>" placeholder="img" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="istri_tmpt_lahir_pernikahan">Tempat Lahir Istri</label>
                                                            <input disabled type="text" class="form-control" name="istri_tmpt_lahir_pernikahan" value="<?php echo $results['istri_tmpt_lahir_pernikahan']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="istri_tgl_lahir_pernikahan">Tanggal Lahir Istri</label>
                                                            <input disabled type="date" class="form-control" name="istri_tgl_lahir_pernikahan" value="<?php echo $results['istri_tgl_lahir_pernikahan']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="saksi_pernikahan">Saksi Pernikahan</label>
                                                            <input disabled type="text" class="form-control" name="saksi_pernikahan" value="<?php echo $results['saksi_pernikahan']; ?>" >
                                                        </div>                                                                                                         
                                                    </div>
                                                    <!-- /.card-body -->
                                                    <div class="card-footer">                  
                                                    <input type="submit" name="kembali" value="Kembali" class="btn btn-secondary">
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

