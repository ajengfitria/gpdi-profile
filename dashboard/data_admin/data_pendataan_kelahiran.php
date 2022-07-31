

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
                                <h1>Data Kelahiran</h1>
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
                                                        <th style='text-align: center;vertical-align: middle;'>Nama Kelahiran</th>
                                                        <th style='text-align: center;vertical-align: middle;'>Tanggal Kelahiran</th>
                                                        <th style='text-align: center;vertical-align: middle;'>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $query   = "SELECT * FROM data_kelahiran ORDER BY id_kelahiran DESC";
                                                        $res     = mysqli_query($con,$query);	      
                                                        $no = 0;          
                                                        while($results = mysqli_fetch_assoc($res)){     
                                                           $no = $no+1;                                     
                                                           echo"
                                                           <tr>
                                                           <td style='text-align: center;vertical-align: middle;'>$no</td>
                                                           <td style='text-align: center;vertical-align: middle;'>{$results['nama_kelahiran']}</td>
                                                           <td style='text-align: center;vertical-align: middle;'>{$results['tgl_lahir_kelahiran']}</td>                                                           
                                                           <td style='text-align: center;vertical-align: middle;' >
                                                           <a href='data_pendataan_kelahiran_lihat.php?id_kelahiran=".$results['id_kelahiran']."' class='btn btn-secondary btn-sm'><b>Lihat</b></a>
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

