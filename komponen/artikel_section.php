<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Artikel Terbaru</h2>

        </div>

        <div class="row gy-5">
            <?php 
                $query_artalk  = "SELECT * FROM hm_artalk ORDER BY id_artalk DESC limit 4";
                $res_artalk = mysqli_query($con,$query_artalk);	      
                while($results_artalk = mysqli_fetch_assoc($res_artalk)){  
                    $judul_artalk = substr($results_artalk['judul_artalk'], 0, 200);
                    $text_artalk = substr(strip_tags($results_artalk['isi_artalk']), 0, 200);
                    // $text_artalk = substr($text_artalk, 0, 200);  
                    $d_date_artalk = date('d, M Y', strtotime($results_artalk['tanggal_artalk']));                                                                                                                
                    // $m_date_artalk = date('M', strtotime($results_artalk['tanggal_artalk'])); 
                
            ?>
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="dashboard/data_gambar/<?php echo $results_artalk['gambar_artalk']; ?>" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date"><?php echo $d_date_artalk; ?></span>
                <!-- <span class="post-author"> / Julia Parker</span> -->
              </div>
              <h3 class="post-title"><?php echo $judul_artalk; ?></h3>
              <p><?php echo $text_artalk; ?></p>
              <a href="blog-details.php?id_artalk=<?php echo $results_artalk['id_artalk']; ?>" class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <?php } ?>
          

        </div>

      </div>
    </section><!-- End Recent Blog Posts Section -->