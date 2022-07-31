<?php include 'komponen/header.php';?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Rumah Terang Ministri</h2>
        <ol>
          <li><a href="index.php">Beranda</a></li>
          <li>Rumah Terang Ministri</li>
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
                $query_rutemi  = "SELECT * FROM dep_rutemi ORDER BY id_rutemi DESC";
                $res_rutemi = mysqli_query($con,$query_rutemi);	      
                while($results_rutemi = mysqli_fetch_assoc($res_rutemi)){  
                    $judul_rutemi = substr($results_rutemi['judul_rutemi'], 0, 200);
                    $text_rutemi = substr(strip_tags($results_rutemi['isi_rutemi']), 0, 200);
                    $d_date_rutemi = date('d M Y', strtotime($results_rutemi['tanggal_rutemi']));    
                
            ?>
              <div class="col-lg-4">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="dashboard/data_gambar/<?php echo $results_rutemi['gambar_rutemi']; ?>" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="rutemi_details.php?id_rutemi=<?php echo $results_rutemi['id_rutemi']; ?>"><?php echo $judul_rutemi; ?></a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <!-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="rutemi_details.php?id_rutemi=<?php echo $results_rutemi['id_rutemi']; ?>">John Doe</a></li> -->
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="rutemi_details.php?id_rutemi=<?php echo $results_rutemi['id_rutemi']; ?>"><time datetime="2022-01-01"><?php echo $d_date_rutemi; ?></time></a></li>
                      <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="rutemi_details.php?id_rutemi=<?php echo $results_rutemi['id_rutemi']; ?>">12 Comments</a></li> -->
                    </ul>
                  </div>

                  <div class="content">
                  <p><?php echo $text_rutemi; ?></p>
                  </div>
                  
                 <div class="read-more mt-auto align-self-end">
                    <a href="rutemi_details.php?id_rutemi=<?php echo $results_rutemi['id_rutemi']; ?>">Selengkapnya <i class="bi bi-arrow-right"></i></a>
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