  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <span><?php echo $results['nama_website']; ?></span>
            </a>
            <p><?php echo $results['tentang_website']; ?></p>
            <div class="social-links d-flex  mt-3">
              <a href="<?php echo $results['link_gmaps']; ?>" class="twitter"><i class="bi bi-map"></i></a>
              <a href="<?php echo $results['link_twitter']; ?>" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="<?php echo $results['link_facebook']; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="<?php echo $results['link_instagram']; ?>" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="<?php echo $results['link_youtube']; ?>" class="linkedin"><i class="bi bi-youtube"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Pintasan</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="index.php">Beranda</a></li>
              <li><i class="bi bi-dash"></i> <a href="about.php">Tentang Kami</a></li>
              <li><i class="bi bi-dash"></i> <a href="rutemi.php">Departement</a></li>
              <li><i class="bi bi-dash"></i> <a href="galery.php">Galeri</a></li>
              <li><i class="bi bi-dash"></i> <a href="pendataan/">Pendataan</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Info</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="keg_blog.php">Khotbah & Kegiatan</a></li>
              <li><i class="bi bi-dash"></i> <a href="blog.php">Artikel Alkitab</a></li>
              <li><i class="bi bi-dash"></i> <a href="birth-info.php">Ucapan Ulang Tahun</a></li>
              <!-- <li><i class="bi bi-dash"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Graphic Design</a></li> -->
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Kontak Kami</h4>
            <p>
            <?php echo $results['alamat_website']; ?><br><br>
              <strong>Telp<br></strong> <?php echo $results['no_wa']; ?><br>
              <strong>Email<br></strong> <?php echo $results['email_website']; ?><br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>2022</span></strong>. All Rights Reserved
        </div>
        <!-- <div class="credits"> -->
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        <!-- </div> -->
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>