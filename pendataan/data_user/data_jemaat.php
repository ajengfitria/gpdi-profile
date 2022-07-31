

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
                                <h1>Data Jemaat</h1>
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
                                <div class="invoice p-3 mb-3">
                                    <div class="row mb-3">
                                        <div class="col-10">
                                            <a href="data_jemaat_tambah.php" class="btn btn-secondary btn-sm">Tambah Data</a>                                                                                 
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- Table row -->
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped table-bordered" style="">
                                                <thead>
                                                    <tr>
                                                        <th style='text-align: center;vertical-align: middle;'>No</th>
                                                        <th style='text-align: center;vertical-align: middle;'>Nama Jemaat</th>
                                                        <th style='text-align: center;vertical-align: middle;'>Tanggal Pendaftaran</th>
                                                        <th style='text-align: center;vertical-align: middle;'>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $query   = "SELECT * FROM data_anggota ORDER BY id_anggota DESC";
                                                        $res     = mysqli_query($con,$query);	      
                                                        $no = 0;          
                                                        while($results = mysqli_fetch_assoc($res)){     
                                                           $no = $no+1;                                     
                                                           echo"
                                                           <tr>
                                                           <td style='text-align: center;vertical-align: middle;'>$no</td>
                                                           <td style='text-align: center;vertical-align: middle;'>{$results['nama_anggota']}</td>
                                                           <td style='text-align: center;vertical-align: middle;'>{$results['tgl_pndftrn_anggota']}</td>                                                           
                                                           <td style='text-align: center;vertical-align: middle;' >
                                                           <a href='data_jemaat_lihat.php?id_anggota=".$results['id_anggota']."' class='btn btn-secondary btn-sm'><b>Lihat</b></a> | 
                                                           <a href='data_jemaat_update.php?id_anggota=".$results['id_anggota']."' class='btn btn-secondary btn-sm'><b>Update</b></a> |
                                                           <a href='data_jemaat_hapus.php?id_anggota=".$results['id_anggota']."' class='btn btn-secondary btn-sm'><b>Hapus</b></a>
                                                           </tr>";}?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->                
                                </div>
                                <!-- /.invoice -->
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
                  $('#ajax').load(document.URL + ' #ajax');}, 5000)
                  
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

