<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Athiphong</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="../assets/css/style2.1.css" rel="stylesheet">

</head>

<body>

  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>หน้าหลัก</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bi bi-calendar-day"></i> <span>เป็นวันอะไร?</span></a></li>
        <li><a href="../index.php" class="nav-link scrollto" onclick="return confirm('คุณต้องการจะออกสู่หน้าหลักมั้ย?')"><i class="bi bi-box-arrow-right"></i> <span>ออกไปสู่หน้าหลัก</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to Website</h1>
      <p>By <span class="typed" data-typed-items=" Athiphong Hinoon "></span></p>
    </div>
  </section><!-- End Hero -->

  <!-- ======= About Section ======= -->
  <section id="about" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100" align="right">
      <h1>วันที่คุณเลือกคือ "<?php echo $d_array[date('l', strtotime($rs))]; ?>"</h1><br>
      <h2>It's on <?php echo date('l', strtotime($rs)); ?></h2><br>
      <h5>DATE : <?php echo $rs; ?></h5>
    </div>
  </section><!-- End About Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Welcome to Website</h3>
      <p>My name is Athiphong Hinoon 644259026 64/45 Major : SoftwareEnginearing.</p>
      <div class="social-links">
          <a href="" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyFunction</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://npru.ac.th/index.php" target="_blank">NPRU</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>