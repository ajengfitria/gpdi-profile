<?php include 'komponen/header.php';?>
<?php   
if (!$_GET) {
}
else{      
$id_rutemi     = $_GET['id_rutemi'];                
$query_blog  = "SELECT * FROM dep_rutemi WHERE id_rutemi = $id_rutemi ";
$blog_result  = mysqli_query($con,$query_blog);
$blog_results = mysqli_fetch_assoc($blog_result);
}
?> 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Detail Rumah Terang Ministri</h2>
        <ol>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="rutemi.php">Rumah Terang Ministri</a></li>
          <li>Detail Rumah Terang Ministri</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <article class="blog-details">

              <div class="post-img">
                <img src="dashboard/data_gambar/<?php echo $blog_results['gambar_rutemi']; ?>" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?php echo $blog_results['judul_rutemi']; ?></h2>

              <div class="meta-top">
                <ul>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="rutemi_details.php">John Doe</a></li> -->
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="rutemi_details.php"><time datetime="2020-01-01"><?php echo date('d M Y', strtotime($blog_results['tanggal_rutemi'])) ?></time></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="rutemi_details.php">12 Comments</a></li> -->
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p><?php echo $blog_results['isi_rutemi']; ?></p>

              </div><!-- End post content -->

              <div class="meta-bottom">
                <!-- <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul> -->
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4">

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Postingan Terbaru</h3>

                <div class="mt-3">
                <?php 
                  $query_rutemi  = "SELECT * FROM dep_rutemi ORDER BY id_rutemi DESC LIMIT 4";
                  $res_rutemi = mysqli_query($con,$query_rutemi);	      
                  while($results_rutemi = mysqli_fetch_assoc($res_rutemi)){
                    $judul_rutemi = $results_rutemi['judul_rutemi'];  
                    // $text_rutemi = strip_tags($results_rutemi['isi_rutemi']);
                    // $text_rutemi = substr($text_rutemi, 0, 200);  
                    $d_date_rutemi = date('d, M Y', strtotime($results_rutemi['tanggal_rutemi']));                                                                                                                
                    // $m_date_rutemi = date('M', strtotime($results_rutemi['tanggal_rutemi']));
                ?>
                  <div class="post-item mt-3">
                    <img src="dashboard/data_gambar/<?php echo $results_rutemi['gambar_rutemi']; ?>" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="rutemi_details.php?id_rutemi=<?php echo $results_rutemi['id_rutemi']; ?>" target="_blank" title="<?php echo $judul_rutemi; ?>"><?php echo substr($judul_rutemi, 0,30); ?>..</a></h4>
                      <time datetime="2020-01-01"><?php echo $d_date_rutemi; ?></time>
                    </div>
                  </div><!-- End recent post item-->
                <?php } ?>
                </div>

              </div><!-- End sidebar recent posts-->

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  <?php include 'komponen/footer.php';?>

</body>

</html>