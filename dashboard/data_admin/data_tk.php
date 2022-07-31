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
                                <h1>Update Data Tentang Kami</h1>
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
                                            $query  = "SELECT * FROM tk WHERE id_tk=1";
                                            $result  = mysqli_query($con,$query);
                                            $results = mysqli_fetch_assoc($result);
                                            ?>
                                        <?php 
                                            if(isset($_POST['update'])){                                          
                                               $isi_visi_misi = $_POST['isi_visi_misi'];
                                               $isi_visi_misi = str_replace("'", "",$isi_visi_misi);
                                               $isi_visi_misi = rtrim($isi_visi_misi);
                                            
                                               $isi_sejarah = $_POST['isi_sejarah'];
                                               $isi_sejarah = str_replace("'", "",$isi_sejarah);
                                               $isi_sejarah = rtrim($isi_sejarah);

                                               $query = "UPDATE tk set isi_visi_misi='$isi_visi_misi', isi_sejarah='$isi_sejarah'
                                               WHERE id_tk = 1";
                                               $result = mysqli_query($con,$query);
                                               echo "
                                               <script type='text/javascript'>
                                               function load(){
                                                  window.location='data_tk.php';
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
                                                    <h4 class="card-title">Update Data Tentang Kami</h4>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form method="post" action="" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                         <div class="form-group">
                                                            <label for="isi_visi_misi">Isi Visi & Misi</label>
                                                            <textarea class="textarea" name="isi_visi_misi" value="" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $results['isi_visi_misi']; ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="isi_sejarah">Isi Sejarah</label>
                                                            <textarea class="textarea" name="isi_sejarah" value="" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $results['isi_sejarah']; ?></textarea>
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

