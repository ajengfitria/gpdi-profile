<?php include 'komponen/header.php';?>
<?php   
if (!$_GET) {
}
else{      
$id_artalk     = $_GET['id_artalk'];                
$query_blog  = "SELECT * FROM hm_artalk WHERE id_artalk = $id_artalk ";
$blog_result  = mysqli_query($con,$query_blog);
$blog_results = mysqli_fetch_assoc($blog_result);
}
?> 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Detail Artikel</h2>
        <ol>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="blog.php">Artikel Alkitab</a></li>
          <li>Detail Artikel</li>
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
                <img src="dashboard/data_gambar/<?php echo $blog_results['gambar_artalk']; ?>" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?php echo $blog_results['judul_artalk']; ?></h2>

              <div class="meta-top">
                <ul>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.php">John Doe</a></li> -->
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.php"><time datetime="2020-01-01"><?php echo date('d M Y', strtotime($blog_results['tanggal_artalk'])) ?></time></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.php">12 Comments</a></li> -->
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p><?php echo $blog_results['isi_artalk']; ?></p>

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
                <h3 class="sidebar-title">Artikel Terbaru</h3>

                <div class="mt-3">
                <?php 
                  $query_artalk  = "SELECT * FROM hm_artalk ORDER BY id_artalk DESC LIMIT 5";
                  $res_artalk = mysqli_query($con,$query_artalk);	      
                  while($results_artalk = mysqli_fetch_assoc($res_artalk)){
                    $judul_artalk = $results_artalk['judul_artalk'];  
                    // $text_artalk = strip_tags($results_artalk['isi_artalk']);
                    // $text_artalk = substr($text_artalk, 0, 200);  
                    $d_date_artalk = date('d, M Y', strtotime($results_artalk['tanggal_artalk']));                                                                                                                
                    // $m_date_artalk = date('M', strtotime($results_artalk['tanggal_artalk']));
                ?>
                  <div class="post-item mt-3">
                    <img src="dashboard/data_gambar/<?php echo $results_artalk['gambar_artalk']; ?>" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-details.php?id_artalk=<?php echo $results_artalk['id_artalk']; ?>" target="_blank" title="<?php echo $judul_artalk; ?>"><?php echo substr($judul_artalk, 0,30); ?>..</a></h4>
                      <time datetime="2020-01-01"><?php echo $d_date_artalk; ?></time>
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