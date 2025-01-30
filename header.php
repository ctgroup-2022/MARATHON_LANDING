<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Marathon Registration</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Sailor
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="images/logo1.jpg" alt="" style="width:200px;">

      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="information.php">Marathon Information</a></li>
          <li><a href="gallery.php">Gallery</a></li>
     
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>


  <!-- Hero Section -->
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12" style="height:800px; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url('images/bc5.avif'); background-size: cover; background-repeat: no-repeat;">
        <div class="row justify-content-center">
          <div class="col-6 a1 d-flex justify-content-center align-items-center" style="height:600px;">
            <h1 class="fw-bolder text-light text-center" style="font-size:80px; font-family:carsive; margin-left:100px;">RUN FOR THE<br> PLANET
              <p style="color:#e02454; letter-spacing:2px;">चल अब उठ</p>
            </h1>
          </div>
          <div class="col-6 d-flex justify-content-center align-items-center">
            <div class="card opacity-75" style="margin-top: 100px;">
              <h2 style="color:#e02454;">Personal Information</h2>
              <form action="../controllers/registerController.php" method="POST" style="opacity: 0.9;">
                <div class="form-group">
                  <label for="fullName"></label>
                  <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                  <label for="email"></label>
                  <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                  <label for="contact"></label>
                  <input type="tel" id="contact" name="contact" placeholder="Enter your contact number" required>
                </div>
                <div class="form-group">
                  <label for="address"></label>
                  <input type="text" id="address" name="address" placeholder="Enter your address" required>
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <select name="gender" required>
                    <option value="" disabled selected>Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="dob">Date of Birth</label>
                  <input type="date" id="dob" name="dob" required>
                </div>
                <button type="submit" class="btn btn-danger fw-bold fs-4 r" style="color:white; width:350px;">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>






  </section><!-- /Hero Section -->