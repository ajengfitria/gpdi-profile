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
                                <h1>Tambah Data User</h1>
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
                                               $username_user = $_POST['username_user'];
                                               $password_user = $_POST['password_user'];

                                               $query = "INSERT INTO data_user(username_user,password_user) values('$username_user','$password_user')";
                                               $result = mysqli_query($con,$query);
                                               echo "
                                               <script type='text/javascript'>
                                               function load(){
                                                  window.location='data_pendataan_user.php';
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
                                                    <h4 class="card-title">Tambah Data User</h4>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form method="post" action="" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="username_user">Username User</label>
                                                            <input type="text" class="form-control" name="username_user" placeholder="Username User" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password_user">Password User</label>
                                                            <input type="text" class="form-control" name="password_user" placeholder="Password User" required>
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
