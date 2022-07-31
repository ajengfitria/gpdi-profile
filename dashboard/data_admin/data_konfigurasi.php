

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
                                <h1>Update Data Konfigurasi</h1>
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
                                            $query  = "SELECT * FROM konfigurasi WHERE id_konfigurasi=1";
                                            $result  = mysqli_query($con,$query);
                                            $results = mysqli_fetch_assoc($result);
                                            ?>
                                        <?php 
                                            if(isset($_POST['update'])){
                                               $nama_website = $_POST['nama_website'];
                                               $alamat_website = $_POST['alamat_website'];
                                               $tentang_website = $_POST['tentang_website'];
                                               $email_website = $_POST['email_website'];                                                                                              
                                               $no_wa = $_POST['no_wa'];
                                               $link_video = $_POST['link_video'];
                                               $link_facebook = $_POST['link_facebook'];
                                               $link_twitter = $_POST['link_twitter'];                                               
                                               $link_instagram = $_POST['link_instagram'];  
                                               $link_youtube = $_POST['link_youtube'];
                                               $link_gmaps = $_POST['link_gmaps'];                                           
                                            
                                               $logo_website_tmp = $_FILES['logo_website']['tmp_name'];
                                               $logo_website_name = $_FILES['logo_website']['name'];
                                            
                                               if($logo_website_name === ''){
                                            
                                                  $logo_website_namanya = $results['logo_website'];}
                                               else{
                                                   $file = $results['logo_website'];
                                                   unlink($file);
                                                   $logo_website_destination = '../data_gambar/logo/'.date('Ymdhi'). $logo_website_name;
                                                   $logo_website_namanya = '../data_gambar/logo/'.date('Ymdhi'). $logo_website_name; 
                                                   move_uploaded_file($logo_website_tmp, $logo_website_destination);                                               
                                               }
                                            
                                               $favicon_website_tmp = $_FILES['favicon_website']['tmp_name'];
                                               $favicon_website_name = $_FILES['favicon_website']['name'];
                                            
                                               if($favicon_website_name === ''){
                                            
                                               $favicon_website_namanya = $results['favicon_website'];}
                                               else{
                                                   $file = $results['favicon_website'];
                                                   unlink($file);
                                                   $favicon_website_destination = '../data_gambar/favicon/'.date('Ymdhi'). $favicon_website_name;
                                                   $favicon_website_namanya = '../data_gambar/favicon/'.date('Ymdhi'). $favicon_website_name; 
                                                   move_uploaded_file($favicon_website_tmp, $favicon_website_destination);                                               
                                               }
                                                                                         
                                               $query = "UPDATE konfigurasi set nama_website='$nama_website', alamat_website='$alamat_website', 
                                               favicon_website='$favicon_website_namanya', logo_website='$logo_website_namanya', link_video='$link_video',
                                               tentang_website='$tentang_website', email_website='$email_website', 
                                               no_wa='$no_wa' , link_facebook='$link_facebook', 
                                               link_twitter='$link_twitter', link_instagram='$link_instagram', link_youtube='$link_youtube', link_gmaps='$link_gmaps'
                                               WHERE id_konfigurasi = 1";
                                               $result = mysqli_query($con,$query);
                                               echo "
                                               <script type='text/javascript'>
                                               function load(){
                                                  window.location='data_konfigurasi.php';
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
                                                    <h4 class="card-title">Update Data Konfigurasi</h4>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form method="post" action="" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="nama_website">Nama Website</label>
                                                            <input type="text" class="form-control" name="nama_website" value="<?php echo $results['nama_website']; ?>" >
                                                        </div>
                                                        <div class="form-group " >
                                                            <label for="favicon_website">Favicon Website</label><br>
                                                            <img id="thumbnil"  src="<?php echo $results['favicon_website']; ?>" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
                                                            <input type="file" onchange="showMyImage(this)" class="form-control" name="favicon_website" value="<?php $results['favicon_website']; ?>" placeholder="img" >
                                                        </div>
                                                        <div class="form-group " >
                                                            <label for="logo_website">Logo Website</label><br>
                                                            <img id="thumbnil1"  src="<?php echo $results['logo_website']; ?>" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
                                                            <input type="file" onchange="showMyImage1(this)" class="form-control" name="logo_website" value="<?php $results['logo_website']; ?>" placeholder="img" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat_website">Alamat Website</label>
                                                            <input type="text" class="form-control" name="alamat_website" value="<?php echo $results['alamat_website']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tentang_website">Tentang Website</label>
                                                            <textarea class="textarea" name="tentang_website" value="" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $results['tentang_website']; ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email_website">Email Website</label>
                                                            <input type="text" class="form-control" name="email_website" value="<?php echo $results['email_website']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_wa">No Whatsapp</label>
                                                            <input type="text" class="form-control" name="no_wa" value="<?php echo $results['no_wa']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_video">Link Video (Youtube Terbaru)</label>
                                                            <input type="text" class="form-control" name="link_video" value="<?php echo $results['link_video']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_facebook">Link Facebook</label>
                                                            <input type="text" class="form-control" name="link_facebook" value="<?php echo $results['link_facebook']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_twitter">Link Twitter</label>
                                                            <input type="text" class="form-control" name="link_twitter" value="<?php echo $results['link_twitter']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_instagram">Link Instagram</label>
                                                            <input type="text" class="form-control" name="link_instagram" value="<?php echo $results['link_instagram']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_youtube">Link Youtube</label>
                                                            <input type="text" class="form-control" name="link_youtube" value="<?php echo $results['link_youtube']; ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_gmaps">Link Google Maps</label>
                                                            <input type="text" class="form-control" name="link_gmaps" value="<?php echo $results['link_gmaps']; ?>" >
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

