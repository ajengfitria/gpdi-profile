<?php include 'komponen/header.php';?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Artikel Alkitab</h2>
        <ol>
          <li><a href="index.php">Beranda</a></li>
          <li>Artikel Alkitab</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">

            <div class="row gy-5 posts-list">
            <?php 
                $query_artalk  = "SELECT * FROM hm_artalk ORDER BY id_artalk DESC";
                $res_artalk = mysqli_query($con,$query_artalk);	      
                while($results_artalk = mysqli_fetch_assoc($res_artalk)){  
                    $judul_artalk = substr($results_artalk['judul_artalk'], 0, 200);
                    $text_artalk = substr(strip_tags($results_artalk['isi_artalk']), 0, 200);
                    $d_date_artalk = date('d M Y', strtotime($results_artalk['tanggal_artalk']));    
                
            ?>
              <div class="col-lg-4">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="dashboard/data_gambar/<?php echo $results_artalk['gambar_artalk']; ?>" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="blog-details.php?id_artalk=<?php echo $results_artalk['id_artalk']; ?>"><?php echo $judul_artalk; ?></a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <!-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.php?id_artalk=<?php echo $results_artalk['id_artalk']; ?>">John Doe</a></li> -->
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.php?id_artalk=<?php echo $results_artalk['id_artalk']; ?>"><time datetime="2022-01-01"><?php echo $d_date_artalk; ?></time></a></li>
                      <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.php?id_artalk=<?php echo $results_artalk['id_artalk']; ?>">12 Comments</a></li> -->
                    </ul>
                  </div>

                  <div class="content">
                  <p><?php echo $text_artalk; ?></p>
                  </div>
                  
                 <div class="read-more mt-auto align-self-end">
                    <a href="blog-details.php?id_artalk=<?php echo $results_artalk['id_artalk']; ?>">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                  </div>

                </article>
              </div><!-- End post list item -->
            
            <?php } ?>


            </div><!-- End blog posts list -->

            

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <?php include 'komponen/footer.php';?>

</body>

</html>