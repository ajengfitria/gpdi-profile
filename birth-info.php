<?php include 'komponen/header.php';?>
<?php      

$date = date("Y-m-d");          
$query_uut  = "SELECT * FROM info_uut WHERE tanggal_uut = '$date'";
// echo $query_uut;
$result_uut  = mysqli_query($con,$query_uut);
$results_uut = mysqli_fetch_assoc($result_uut);

?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/portfolio-header.jpg');">
      <!-- <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Portfolio Details</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Portfolio Details</li>
        </ol>

      </div> -->
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <?php if($results_uut !== NULL) { ?>
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-2">

          <div class="col-lg-8">
            <div class="slides-1 portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="dashboard/data_gambar/<?php echo $results_uut['gambar_uut']; ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Selamat Ulang Tahun :)</h3>
              <ul>
                <li><?php echo $results_uut['judul_uut']; ?></li>
                <li><?php echo $results_uut['isi_uut']; ?></li>
                <!-- <li><strong>Client</strong>: ASU Company</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
              </ul>
            </div>
            <!-- <div class="portfolio-description">
              <h2>Happy Birthday! God Bless U!</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div> -->
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
    <?php } else { ?>
      <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-2">
          <center>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Halo!</h3>
              <ul>
                <li>Tidak ada yang berulang tahun hari ini :)</li>
                <!-- <li><strong>Client</strong>: ASU Company</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
              </ul>
            </div>
          </center>
            <!-- <div class="portfolio-description">
              <h2>Happy Birthday! God Bless U!</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div> -->
          </div>

        </div>

      </div>
    </section>
    <?php } ?>

  </main><!-- End #main -->

  <?php include 'komponen/footer.php';?>

</body>

</html>