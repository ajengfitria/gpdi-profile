<?php include 'komponen/header.php';?>
<?php   
if (!$_GET) {
}
else{      
$id_khokeg     = $_GET['id_khokeg'];                
$query_blog  = "SELECT * FROM info_khokeg WHERE id_khokeg = $id_khokeg ";
$blog_result  = mysqli_query($con,$query_blog);
$blog_results = mysqli_fetch_assoc($blog_result);
}
?> 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Detail Khotbah dan Kegiatan</h2>
        <ol>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="keg_blog.php">Khotbah dan Kegiatan</a></li>
          <li>Detail Khotbah dan Kegiatan</li>
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
                <img src="dashboard/data_gambar/<?php echo $blog_results['gambar_khokeg']; ?>" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?php echo $blog_results['judul_khokeg']; ?></h2>

              <div class="meta-top">
                <ul>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.php">John Doe</a></li> -->
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.php"><time datetime="2020-01-01"><?php echo date('d M Y', strtotime($blog_results['tanggal_khokeg'])) ?></time></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.php">12 Comments</a></li> -->
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p><?php echo $blog_results['isi_khokeg']; ?></p>

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
                  $query_khokeg  = "SELECT * FROM info_khokeg ORDER BY id_khokeg DESC LIMIT 5";
                  $res_khokeg = mysqli_query($con,$query_khokeg);	      
                  while($results_khokeg = mysqli_fetch_assoc($res_khokeg)){
                    $judul_khokeg = $results_khokeg['judul_khokeg'];  
                    // $text_khokeg = strip_tags($results_khokeg['isi_khokeg']);
                    // $text_khokeg = substr($text_khokeg, 0, 200);  
                    $d_date_khokeg = date('d, M Y', strtotime($results_khokeg['tanggal_khokeg']));                                                                                                                
                    // $m_date_khokeg = date('M', strtotime($results_khokeg['tanggal_khokeg']));
                ?>
                  <div class="post-item mt-3">
                    
                    <div>
                      <p><a href="keg_details.php?id_khokeg=<?php echo $results_khokeg['id_khokeg']; ?>" target="_blank" title="<?php echo $judul_khokeg; ?>"><?php echo substr($judul_khokeg, 0,35); ?>..</a></p>
                      <time datetime="2020-01-01"><?php echo $d_date_khokeg; ?></time>
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