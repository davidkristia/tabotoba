    <!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Produk</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/TaboTobaLogo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

        <!-- <div class="logo">
                    <a class="navbar-brand ms-5 me-3" href="#">
                        <img src="Mentor\assets\img\TaboTobaLogo.png" width="70" >
                    </a>
                </div> -->
        <a href="index.html" class="logo me-3">
            <img src="assets/img/TaboTobaLogo.png" alt="" class="img-fluid">
            <h1 class="logo me-auto"><a href="index.html">Tabo Toba</a></h1>
        </a>
        
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/TaboTobaLogo.png" alt="" class="img-fluid"></a> -->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a class="active" href="produk.php">Produk</a></li>
            <li><a href="ulasan.php">Ulasan</a></li>
            <li><a href="trainers.html">Tentang Tabo Toba</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="courses.html" class="masuk-btn">Masuk</a>

        </div>
    </header><!-- End Header -->

    <main id="main" data-aos="fade-in">

        <!-- ======= Courses Section ======= -->
        <br><br><br><section id="product" class="product">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                <?php

                    include_once('config/autoload.php');

                    $query = 'SELECT * FROM product';
                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_assoc($result)){?>
                        <div class="col-lg-4 col-md-6 d-flex my-3 align-items-stretch">
                            <div class="product-item">
                            <img src="data:image/jpeg;base64, <?php echo base64_encode($row["img"]); ?>" class="img-fluid" alt="...">
                                <div class="product-content">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4><?php echo $row["quantity"];?></h4>
                                    <p class="price"><?php echo $row["price_produk"];?></p>
                                    </div>

                                    <h3><a href="course-details.html"><?php echo $row["name_product"];?></a></h3>
                                    <p><?php echo $row["description"];?></p>
                                    <div class="trainer d-flex justify-content-between align-items-center">
                                    <!-- <div class="trainer-profile d-flex align-items-center">
                                        <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                        <span>Antonio</span>
                                    </div> -->
                                        <!-- <div class="trainer-rank d-flex align-items-center">
                                            <i class="bx bx-user"></i>&nbsp;50
                                            &nbsp;&nbsp;
                                            <i class="bx bx-heart"></i>&nbsp;65
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Course Item-->
                    <?php }
                ?>

            </div>

        </div>
        </section><!-- End Courses Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Tabo Toba</h3>
            <p>
              9427+7PQ, Jl. Ps. Melintang, Tambunan Lumban Pea, Aruan<br>
              Kec. Balige, Toba<br>
              Sumatera Utara 20371 <br><br>
              <strong>Phone:</strong> +62 82277635600<br>
              <strong>Email:</strong>  <br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Produk</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ulasan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Tabo Toba</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-image">
            <img src="assets/img/TaboTobaLogo.png" alt="tabotoba" width="200px" height="200px">
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Tabo Toba </span></strong>. All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/tabo.toba?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    </body>

    </html>