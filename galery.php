<?php include 'komponen/header.php';?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/cards-3.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Galeri</h2>
        <ol>
          <li><a href="index.php">Beranda</a></li>
          <li>Galeri</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <?php 
            $query_galeri   = "SELECT * FROM galeri ORDER BY id_galeri DESC";
            $res_galeri     = mysqli_query($con,$query_galeri);	      
            while($results_galeri = mysqli_fetch_assoc($res_galeri)){  ?>
            <a href="dashboard/data_gambar/<?php echo $results_galeri['gambar_galeri']; ?>" title="" data-gallery="portfolio-gallery-app" class="glightbox details-link">
              <img src="dashboard/data_gambar/<?php echo $results_galeri['gambar_galeri']; ?>" class="img-fluid" alt="">
              </a>
            <?php } ?>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <?php include 'komponen/footer.php';?>

</body>

</html>