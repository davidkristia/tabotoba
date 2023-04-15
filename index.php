<?php
  include_once('config/autoload.php');
?>
\<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> UMKM - TABO TOBA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="Java.js"></script>

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

      <a href="index.html" class="logo me-auto">
        <img src="assets/img/TaboTobaLogo.png" alt="" class="img-fluid">
        <h1 class="logo me-auto"><a href="index.html">Tabo Toba</a></h1>
      </a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php">Beranda</a></li>
          <li><a href="produk.php">Produk</a></li>
          <li><a href="ulasan.php">Ulasan</a></li>
          <li><a href="trainers.html">Tentang Tabo Toba</a></li>
           
            <?php
              session_start();

              if (!isset($_SESSION['is_logged_in'])){?>
                <button class="masuk-btn ms-3" onclick="openForm()">
                  <a href="login.php" class="" style="color: #ffff;">Masuk</a> 
                </button>
                      
                
              <?php } else{ ?>
          
                <button class="masuk-btn ms-3" onclick="openForm()">
                  <i class="fa-regular fa-user fa-lg mx-auto" style="color: #ffff;"></i>
                </button>
                  <div class="form-popup popup-section" id="myForm">
                    <form action="/action_page.php" class="form-container">
                      <h3 class="text-center">Akun</h4>
                                                        
                        <?php
                          $username = $_SESSION['username'];
                
                          $query = "SELECT role FROM user WHERE username='$username'";
                          $result = $conn -> query($query);

                          $role = $result-> fetch_assoc();
                          $role = $role['role'];

                          if($role == 1){ ?>
                            <br>
                            <button class="masuk-btn" onclick="openForm()">
                              <a href="dashboard.php" role="button" style="color: #ffff;" >Dashboard</a>
                            </button>
                            
                          <?php } ?>

                          <br><br>
                          
                          <div class="row">
                            <div class="col-4">
                              <button class="masuk-btn ms-3">
                                <a onclick="closeForm()" role="button">Close</a>
                              </button>                           
                            </div>
                            <div class="col-4">
                              <button class="masuk-btn ms-3">
                                <a href="logout.php" role="button" style="color: #ffff;">Keluar</a>
                              </button>                                
                            </div>
                          </div>                        
                    </form>
                   </div>
              <?php }?>
        </ul>
        
        <i class="bi bi-list mobile-nav-toggle mx-4"></i>
      </nav><!-- navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Tabo Toba</h1>
      <h2>Oleh-oleh Khas Toba</h2>
      <a href="produk.php" class="btn-get-started">Lihat Produk</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/tabo.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>UMKM Tabo Toba </h3>
            <p class="fst-italic">
             Selamat Datang Di UMKM Tabo Toba , Jangan Lupa Di Order.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>Sudah BPOM </li>
              <li><i class="bi bi-check-circle"></i> Merupakan Oleh oleh Atau Makanan Khas Toba/ Suku Batak.</li>
              <li><i class="bi bi-check-circle"></i> Beralamat Di Jl. Pasar Melintang, Tambunan Lumban Pea, Kabupaten Toba.</li>
            </ul>
            <p>
              Memiliki Cita Rasa Khas Yang Autentik 
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
            <button onclick="typeWriter()">Why Choose Tabo Toba?</button>
                <p id="typing"></p>
              <div class="text-center">
                <a href="trainers.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Produk</h2>
          <p>Produk Terlaris </p>
          
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/Keripik .jpeg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Keripik Bawang Cabai Rawit</h4>
                </div>

                <h3><a href="course-details.html">Keripik</a></h3>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/Cookies Vanilla .jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Cookies Vanilla</h4>
                </div>

                <h3><a href="course-details.html">Cookies Vanilla</a></h3>                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  </div>
                  
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/Sambal .jpeg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Sambal Mie Gomak Andaliman</h4>
                </div>

                <h3><a href="course-details.html">Sambal</a></h3>
                <div class="trainer d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    

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

  <script>
        function openForm() {
        document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
        document.getElementById("myForm").style.display = "none";
        }
    </script>

</body>

</html>