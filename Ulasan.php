<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ulasan-TABO TOBA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/TaboTobaLogo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

        
        <a href="index.html" class="logo me-3">
            <img src="assets/img/TaboTobaLogo.png" alt="" class="img-fluid">
            <h1 class="logo me-auto"><a href="index.html">Tabo Toba</a></h1>
        </a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="produk.php">Produk</a></li>
            <li><a class="active" href="ulasan.php">Ulasan</a></li>
            <li><a href="trainers.html">Tentang Tabo Toba</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="courses.html" class="masuk-btn">Masuk</a>

        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->

        <!-- <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Ulasan</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
        </div>
        </div> -->

        <!-- End Breadcrumbs -->



        <!-- ======= ulasan Section ======= -->
        <br><br><section id="ulasan" class="ulasan">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Ulasan</h2>
                <p>Apa Kata Mereka ?</p>
            </div>

            

            <?php
                include_once('config/autoload.php');

                $query = 'SELECT r.*, u.username, p.name_product  
                            FROM review r
                            JOIN user u 
                            ON r.user_id = u.user_id
                            JOIN product p
                            ON r.product_id = p.product_id
                            ORDER BY date DESC';
                
                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($result)){?>

                    <div class="swiper-slide">
                        <div class="ulasan-wrap">
                            <div class="ulasan-item">
                            <h3 class="ulasan-img"><i class="fa-regular fa-user fa-xl" style="color: #B20600;"></i></h3>                        
                            <h3><?php echo $row["username"];?></h3>
                            <h4><?php echo $row["name_product"];?></h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    <?php echo $row["review"];?>
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            </div>
                        </div>
                    </div><!-- End ulasan item -->
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>

        </section><!-- End ulasan Section -->

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