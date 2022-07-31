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
                                <h1>Tambah Data Anggota Jemaat</h1>
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
                                               $nama_anggota = $_POST['nama_anggota'];
                                               $jns_kelamin_anggota = $_POST['jns_kelamin_anggota'];                                                                                              
                                               $gol_darah_anggota = $_POST['gol_darah_anggota'];
                                               $tmpt_lahir_anggota = $_POST['tmpt_lahir_anggota'];                                                                                           
                                               $tgl_lahir_anggota = $_POST['tgl_lahir_anggota'];                                                                                           
                                               $tgl_pndftrn_anggota = $_POST['tgl_pndftrn_anggota'];                                                                                           
                                               $alamat_anggota = $_POST['alamat_anggota'];                                                                                           
                                               $telepon_anggota = $_POST['telepon_anggota'];                                                                                           
                                               $pndh_kota_anggota = $_POST['pndh_kota_anggota'];                                                                                           
                                               $pndh_gereja_anggota = $_POST['pndh_gereja_anggota'];
                                               $id_user = $_SESSION['id_user'];                                                                                                                                      

                                               $gambar_tmp = $_FILES['ktp_anggota']['tmp_name'];
                                               $gambar_name = $_FILES['ktp_anggota']['name'];                                               
                                               $gambar_destination = '../data_gambar/ktp_jemaat/'.date('Ymdhi') . $gambar_name;
                                               $gambar_namanya = '../data_gambar/ktp_jemaat/'.date('Ymdhi') . $gambar_name; 
                                               move_uploaded_file($gambar_tmp, $gambar_destination);                                               
                                               $query = "INSERT INTO data_anggota(nama_anggota,ktp_anggota,jns_kelamin_anggota,gol_darah_anggota,tmpt_lahir_anggota,tgl_lahir_anggota,tgl_pndftrn_anggota,alamat_anggota,telepon_anggota,pndh_kota_anggota,pndh_gereja_anggota,id_user) values('$nama_anggota','$gambar_namanya','$jns_kelamin_anggota','$gol_darah_anggota','$tmpt_lahir_anggota','$tgl_lahir_anggota','$tgl_pndftrn_anggota','$alamat_anggota','$telepon_anggota','$pndh_kota_anggota','$pndh_gereja_anggota','$id_user')";
                                               $result = mysqli_query($con,$query);
                                               echo "
                                               <script type='text/javascript'>
                                               function load(){
                                                  window.location='data_jemaat.php';
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
                                                    <h4 class="card-title">Tambah Data Anggota Jemaat</h4>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form method="post" action="" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="nama_anggota">Nama Lengkap</label>
                                                            <input type="text" class="form-control" name="nama_anggota" placeholder="Nama Lengkap" required>
                                                        </div>
                                                        <div class="form-group " >
                                                            <label for="ktp_anggota">Foto KTP</label><br>
                                                            <img id="thumbnil"  src="<?php echo $results['ktp_anggota']; ?>" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
                                                            <input type="file" onchange="showMyImage(this)" class="form-control" name="ktp_anggota" value="<?php $results['ktp_anggota']; ?>" placeholder="img" required >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jns_kelamin_anggota">Jenis Kelamin</label>                                                            
                                                            <select id="jns_kelamin_anggota" name="jns_kelamin_anggota" class="form-control" required>
                                                            <?php
                                                                $datas = array('-', 'Laki - Laki', 'Perempuan');                                                                                                                                
                                                                foreach($datas as $data) {
                                                                    echo '<option>'.$data.'</option>';
                                                                    }
                                                                ?>
                                                            </select>  
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="gol_darah_anggota">Golongan Darah</label>                                                            
                                                            <select id="gol_darah_anggota" name="gol_darah_anggota" class="form-control" required>
                                                            <?php
                                                                $datas = array('-', 'A', 'B', 'AB', 'O');                                                                
                                                                foreach($datas as $data) {
                                                                    echo '<option>'.$data.'</option>';                                                                    
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tmpt_lahir_anggota">Tempat Lahir</label>
                                                            <input type="text" class="form-control" name="tmpt_lahir_anggota" placeholder="Tempat Lahir" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tgl_lahir_anggota">Tanggal Lahir</label>
                                                            <input type="date" class="form-control" name="tgl_lahir_anggota" placeholder="Tanggal Lahir" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tgl_pndftrn_anggota">Tanggal Pendaftaran</label>
                                                            <input type="date" class="form-control" name="tgl_pndftrn_anggota" placeholder="Tanggal Pendaftaran" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat_anggota">Alamat Rumah</label>
                                                            <input type="text" class="form-control" name="alamat_anggota" placeholder="Alamat Rumah" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="telepon_anggota">Nomor Handphone</label>
                                                            <input type="text" class="form-control" name="telepon_anggota" placeholder="Nomor Handphone" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pndh_kota_anggota">Pindah Dari Kota</label>
                                                            <input type="text" class="form-control" name="pndh_kota_anggota" placeholder="Asal Kota" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pndh_gereja_anggota">Pindah Dari Gereja</label>
                                                            <input type="text" class="form-control" name="pndh_gereja_anggota" placeholder="Asal Gereja" required>
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
