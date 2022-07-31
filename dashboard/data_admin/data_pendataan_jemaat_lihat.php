

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
                                <h1>Lihat Data Anggota Jemaat</h1>
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
                                               $id_anggota     = $_GET['id_anggota'];
                                               $query  = "SELECT * FROM data_anggota WHERE id_anggota=$id_anggota";
                                               $result  = mysqli_query($con,$query);
                                               $results = mysqli_fetch_assoc($result);
                                            }
                                            ?>      
                                            <?php 
                                            if(isset($_POST['kembali'])){                                               
                                               echo "
                                               <script type='text/javascript'>
                                               function load(){
                                                  window.location='data_pendataan_jemaat.php';
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
                                                    <h4 class="card-title">Lihat Data Anggota Jemaat</h4>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form method="post" action="" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="nama_anggota">Nama Lengkap</label>
                                                            <input disabled type="text" class="form-control" name="nama_anggota" value="<?php echo $results['nama_anggota']; ?>" >
                                                        </div>
                                                        <div class="form-group " >
                                                            <label for="ktp_anggota">Foto KTP</label><br>
                                                            <img id="thumbnil"  src="../../pendataan/pendataan/<?php echo $results['ktp_anggota']; ?>" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
                                                            <input disabled type="file" onchange="showMyImage(this)" class="form-control" name="ktp_anggota" value="<?php $results['ktp_anggota']; ?>" placeholder="img" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jns_kelamin_anggota">Jenis Kelamin</label> 
                                                            <select disabled id="jns_kelamin_anggota" name="jns_kelamin_anggota" class="form-control">
                                                            <?php
                                                                $datas = array('-', 'Laki - Laki', 'Perempuan');
                                                                $current_datas = $results['jns_kelamin_anggota'];
                                                                
                                                                foreach($datas as $data) {
                                                                    if($data == $current_datas) {
                                                                    echo '<option selected="selected">'.$data.'</option>';
                                                                    } else {
                                                                    echo '<option>'.$data.'</option>';
                                                                    }
                                                                }
                                                                ?>
                                                            </select>                                                                                                                                                                                   
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="gol_darah_anggota">Golongan Darah</label> 
                                                            <select disabled id="gol_darah_anggota" name="gol_darah_anggota" class="form-control">
                                                            <?php
                                                                $datas = array('-', 'A', 'B', 'AB', 'O');
                                                                $current_datas = $results['gol_darah_anggota'];
                                                                
                                                                foreach($datas as $data) {
                                                                    if($data == $current_datas) {
                                                                    echo '<option selected="selected">'.$data.'</option>';
                                                                    } else {
                                                                    echo '<option>'.$data.'</option>';
                                                                    }
                                                                }
                                                                ?>
                                                            </select>                                                                                                                                                                                   
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tmpt_lahir_anggota">Tempat Lahir</label>
                                                            <input disabled type="text" class="form-control" name="tmpt_lahir_anggota" value="<?php echo $results['tmpt_lahir_anggota']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tgl_lahir_anggota">Tanggal Lahir</label>
                                                            <input disabled type="date" class="form-control" name="tgl_lahir_anggota" value="<?php echo $results['tgl_lahir_anggota']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tgl_pndftrn_anggota">Tanggal Pendaftaran</label>
                                                            <input disabled type="date" class="form-control" name="tgl_pndftrn_anggota" value="<?php echo $results['tgl_pndftrn_anggota']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat_anggota">Alamat</label>
                                                            <input disabled type="text" class="form-control" name="alamat_anggota" value="<?php echo $results['alamat_anggota']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="telepon_anggota">Telepon</label>
                                                            <input disabled type="text" class="form-control" name="telepon_anggota" value="<?php echo $results['telepon_anggota']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pndh_kota_anggota">Pindah Kota</label>
                                                            <input disabled type="text" class="form-control" name="pndh_kota_anggota" value="<?php echo $results['pndh_kota_anggota']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pndh_gereja_anggota">Pindah Gereja</label>
                                                            <input disabled type="text" class="form-control" name="pndh_gereja_anggota" value="<?php echo $results['pndh_gereja_anggota']; ?>" >
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

