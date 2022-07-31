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
                                <h1>Tambah Data Kelahiran</h1>
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
                                               $nama_kelahiran = $_POST['nama_kelahiran'];                                                                                         
                                               $jns_kelamin_kelahiran = $_POST['jns_kelamin_kelahiran'];
                                               $tmpt_lahir_kelahiran = $_POST['tmpt_lahir_kelahiran'];                                                                                           
                                               $tgl_lahir_kelahiran = $_POST['tgl_lahir_kelahiran'];                                                                                           
                                               $ayah_kelahiran = $_POST['ayah_kelahiran'];                                                                                           
                                               $ibu_kelahiran = $_POST['ibu_kelahiran'];                                                                                           
                                               $saksi_1_baptisan_kelahiran = $_POST['saksi_1_baptisan_kelahiran'];                                                                                           
                                               $saksi_2_baptisan_kelahiran = $_POST['saksi_2_baptisan_kelahiran'];
                                               $id_user = $_SESSION['id_user'];                                                                                                                                      

                                               $gambar_tmp = $_FILES['surat_lampiran_kelahiran']['tmp_name'];
                                               $gambar_name = $_FILES['surat_lampiran_kelahiran']['name'];
                                               $gambar_destination = '../data_gambar/surat_lampiran_kelahiran/'.date('Ymdhi') . $gambar_name;
                                               $gambar_namanya = '../data_gambar/surat_lampiran_kelahiran/'.date('Ymdhi') . $gambar_name; 
                                               move_uploaded_file($gambar_tmp, $gambar_destination);                                               
                                               
                                               $query = "INSERT INTO data_kelahiran(nama_kelahiran,surat_lampiran_kelahiran,jns_kelamin_kelahiran,tmpt_lahir_kelahiran,tgl_lahir_kelahiran,ayah_kelahiran,ibu_kelahiran,saksi_1_baptisan_kelahiran,saksi_2_baptisan_kelahiran,id_user) values('$nama_kelahiran','$gambar_namanya','$jns_kelamin_kelahiran','$tmpt_lahir_kelahiran','$tgl_lahir_kelahiran','$ayah_kelahiran','$ibu_kelahiran','$saksi_1_baptisan_kelahiran','$saksi_2_baptisan_kelahiran','$id_user')";
                                               $result = mysqli_query($con,$query);
                                               echo "
                                               <script type='text/javascript'>
                                               function load(){
                                                  window.location='data_kelahiran.php';
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
                                                    <h4 class="card-title">Tambah Data Kelahiran</h4>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form method="post" action="" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="nama_kelahiran">Nama Lengkap</label>
                                                            <input type="text" class="form-control" name="nama_kelahiran" placeholder="Nama Lengkap" required>
                                                        </div>
                                                        <div class="form-group " >
                                                            <label for="surat_lampiran_kelahiran">Surat Lampiran Kelahiran</label><br>
                                                            <img id="thumbnil"  src="#" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
                                                            <input type="file" onchange="showMyImage(this)" class="form-control" name="surat_lampiran_kelahiran" placeholder="img" required >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jns_kelamin_kelahiran">Jenis Kelamin</label>                                                            
                                                            <select id="jns_kelamin_kelahiran" name="jns_kelamin_kelahiran" class="form-control" required>
                                                            <?php
                                                                $datas = array('-', 'Laki - Laki', 'Perempuan');                                                                                                                                
                                                                foreach($datas as $data) {
                                                                    echo '<option>'.$data.'</option>';
                                                                    }
                                                                ?>
                                                            </select>  
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tmpt_lahir_kelahiran">Tempat Lahir</label>
                                                            <input type="text" class="form-control" name="tmpt_lahir_kelahiran" placeholder="Tempat Lahir" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tgl_lahir_kelahiran">Tanggal Lahir</label>
                                                            <input type="date" class="form-control" name="tgl_lahir_kelahiran" placeholder="Tanggal Lahir" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ayah_kelahiran">Nama Lengkap Ayah</label>
                                                            <input type="text" class="form-control" name="ayah_kelahiran" placeholder="Nama Lengkap Ayah" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ibu_kelahiran">Nama Lengkap Ibu</label>
                                                            <input type="text" class="form-control" name="ibu_kelahiran" placeholder="Nama Lengkap Ibu" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="saksi_1_baptisan_kelahiran">Saksi Kelahiran 1</label>
                                                            <input type="text" class="form-control" name="saksi_1_baptisan_kelahiran" placeholder="Nama & Hubungan Keluarga" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="saksi_2_baptisan_kelahiran">Saksi Kelahiran 2</label>
                                                            <input type="text" class="form-control" name="saksi_2_baptisan_kelahiran" placeholder="Nama & Hubungan Keluarga" required>
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
