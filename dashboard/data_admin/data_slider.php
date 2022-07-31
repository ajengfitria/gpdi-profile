

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
                                <h1>Data Slider</h1>
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
                                            <a href="data_slider_tambah.php" class="btn btn-secondary btn-sm">Tambah Slider</a>                                                                                 
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
                                                        <th style='text-align: center;vertical-align: middle;'>Slider</th>
                                                        <th style='text-align: center;vertical-align: middle;'>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $query   = "SELECT * FROM slider ORDER BY id_slider DESC";
                                                        $res     = mysqli_query($con,$query);	      
                                                        $no = 0;          
                                                        while($results = mysqli_fetch_assoc($res)){     
                                                           $no = $no+1;                                                                                               
                                                           echo"
                                                           <tr>
                                                           <td style='text-align: center;vertical-align: middle;'>$no</td>       
                                                           <td style='text-align: center;vertical-align: middle;'><img src='{$results['gambar_slider']}' style='height:160px;width:260px'></td>                                                                                                                     
                                                           <td style='text-align: center;vertical-align: middle;' ><a href='data_slider_update.php?id_slider=".$results['id_slider']."' class='btn btn-secondary btn-sm'><b>Update</b></a> atau 
                                                           <a href='data_slider_hapus.php?id_slider=".$results['id_slider']."' class='btn btn-outline-secondary btn-sm'><b>Hapus</b></a></td>                                                             
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

