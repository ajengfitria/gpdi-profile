<?php include 'komponen/header.php';?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Khotbah dan Kegiatan</h2>
        <ol>
          <li><a href="index.php">Beranda</a></li>
          <li>Khotbah dan Kegiatan</li>
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
                $query_khokeg  = "SELECT * FROM info_khokeg ORDER BY id_khokeg DESC";
                $res_khokeg = mysqli_query($con,$query_khokeg);	      
                while($results_khokeg = mysqli_fetch_assoc($res_khokeg)){  
                    $judul_khokeg = substr($results_khokeg['judul_khokeg'], 0, 200);
                    $text_khokeg = substr(strip_tags($results_khokeg['isi_khokeg']), 0, 200);
                    $d_date_khokeg = date('d M Y', strtotime($results_khokeg['tanggal_khokeg']));    
                
            ?>
              <div class="col-lg-4">
                <article class="d-flex flex-column">

                 

                  <h2 class="title">
                    <a href="keg_details.php?id_khokeg=<?php echo $results_khokeg['id_khokeg']; ?>"><?php echo $judul_khokeg; ?></a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <!-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="keg_details.php?id_khokeg=<?php echo $results_khokeg['id_khokeg']; ?>">John Doe</a></li> -->
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="keg_details.php?id_khokeg=<?php echo $results_khokeg['id_khokeg']; ?>"><time datetime="2022-01-01"><?php echo $d_date_khokeg; ?></time></a></li>
                      <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="keg_details.php?id_khokeg=<?php echo $results_khokeg['id_khokeg']; ?>">12 Comments</a></li> -->
                    </ul>
                  </div>

                  <div class="content">
                  <p><?php echo $text_khokeg; ?></p>
                  </div>
                  
                 <div class="read-more mt-auto align-self-end">
                    <a href="keg_details.php?id_khokeg=<?php echo $results_khokeg['id_khokeg']; ?>">Selengkapnya <i class="bi bi-arrow-right"></i></a>
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