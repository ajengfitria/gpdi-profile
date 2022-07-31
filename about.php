<?php include 'komponen/header.php';?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/2.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Tentang Kami</h2>
        <ol>
          <li><a href="index.php">Beranda</a></li>
          <li>Tentang Kami</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">
            <img src="assets/img/4.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h3>Visi</h3>
              <p> Menjadi gereja yang bertumbuh dan melayani dalam keragaman</p>
              <h3>Misi</h3>
              <p> Mewujudkan Ibadah, Pengajaran, Kesaksian, Persekutuan dan Pelayanan yang partisipatif &amp; inovatif.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Services Cards Section ======= -->
    <section id="services-cards" class="services-cards">
      <div class="container" data-aos="fade-up">
      <div class="section-header">
          <h2>Sejarah Gereja</h2>
        </div>

        <div class="row gy-4">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/galery-header.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Eligendi omnis sunt veritatis.</h4> -->
                    <?php                        
                    $query_sejarah  = "SELECT * FROM tk WHERE id_tk = 1";
                    $result_sejarah  = mysqli_query($con,$query_sejarah);
                    $results_sejarah = mysqli_fetch_assoc($result_sejarah);
                    ?>                 				
                
                    <p><?php echo $results_sejarah['isi_sejarah']; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Services Cards Section -->

  </main><!-- End #main -->

  <?php include 'komponen/footer.php';?>

</body>

</html>