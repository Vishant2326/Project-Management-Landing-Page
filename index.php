<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Project Management Landing Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <style>
    .modal-header {
      background: #F7941E;
      color: #fff;
    }

    .required:after {
      content: "*";
      color: red;
    }
  </style>

</head>

<body>


  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">
      <nav id="navbar" class="navbar">
        <div class="logo">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span><strong>
                <bold>Proneck</bold>
              </strong></span>
          </a>
        </div>

        <ul>
          <li><a class="nav-link scrollto active" href="#card"><strong>
                <bold>Product</bold>
              </strong></a></li>
          <li class="dropdown"><a href="#Solutions"><span><strong>
                  <bold>Solutions</bold>
                </strong></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#sec"><strong>
                <bold>Company</bold>
              </strong></a></li>
          <li><a class="nav-link scrollto" href="#main"><strong>
                <bold>Pricing</bold>
              </strong></a></li>
        </ul><i class="bi bi-list mobile-nav-toggle"></i>
      </nav>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="login.php"><strong>
                <bold>Login</bold>
              </strong></a></li>
          <li><a type="button" class="btn getstarted scrollto" data-bs-toggle="modal" data-bs-target="#myModal">Get
              Started</a></li>
        </ul>
      </nav>
    </div>
  </header>



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <br>
    <div class="container">
      <div class="row">
        <div
          class=" col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up">
          <div class="vk">
            <h1>Fast and Clean<br>help Structure<br>your work</h1>
            <p>Learn how hundreads of companies use Eden to create<br>
              delightful employee experiences every day</p>
            <a type="button" class="btn download-btn" data-bs-toggle="modal" data-bs-target="#myModal"> Get Started</a>
            <a><i class=" re bi bi-play-circle"></i> How it works</a>
            <br>
            <h6 class="smt">Smart Integrations</h6>
            <?php
                  
                  include('AddIcons.php');
           
             ?>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img"
          data-aos="fade-up">
          <?php
                  
                  include('DestopImage.php');
           
             ?>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <strong>
            <bold>
              <h1>The complete , integrated Solution<br> for people and workplace teams</h1>
            </bold>
          </strong>
        </div>

        <!-- Card deck -->
        <div  id="card" class="card-deck row">

          <div class="col-xs-12 col-sm-6 col-md-4">
            <!-- Card -->
            <div class="card">


              <!--Card content-->
              <div class="card-body">

                <!--Title-->
                <strong>
                  <bold>
                    <h4 class="card-title fornt-color:black">Performance Management</h4>
                  </bold>
                </strong>
                <!--Text-->
                <small>
                  <p class="card-text text-align: center">Managing Company-wide reviews should <br>be flexbile and
                    actionabl.admins to manage the review process.<br></p>
                </small>
              </div>

              <!--Card image-->
              <div class="view overlay">
              <?php
                  
                  include('CardImage1.php');
           
             ?>
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
            </div>
            <!-- Card -->
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 ca">
            <!-- Card -->
            <div class="card mb-4 ">
              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">Room Scheduling</h4>
                <!--Text-->
                <small>
                  <p class="card-text text-align: center">Managing Company-wide reviews should <br>be flexbile and
                    actionabl.admins to manage the review process.<br></p>
                </small>
              </div>
              <!--Card image-->
              <div class="view overlay">
              <?php
                  
                  include('CardImage2.php');
           
             ?>
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
            </div>
            <!-- Card -->
          </div>
        </div>
      </div>

    </section><!-- End App Features Section -->

    <section id="sec" class="sec">
      <div class="row">
        <div class="about-col-1">
        <?php
              include('FooterImage.php');
          ?>
        </div>
        <div class="about-col-2">
          <strong>
            <bold>
              <h1>Smart Communication<br>Organization</h1>
            </bold>
          </strong>
          <P>Keep track of all the important conversation your teams are heaving<br>with intelligent communication
            sorting.</p>
          <p class="mod1"><i class="di bi bi-check-lg"></i> Collaborate on projects </p>
          <p class="mod2"><i class="di bi bi-check-lg"></i> Work in real-time </p>
          <p class="mod3"><i class="di bi bi-check-lg"></i> organize page content </p>
        </div>
      </div>
    </section>


    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Get Started</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">

            <form action="addcus.php" method="POST">

              <div class="col-md-12">
                <label class="form-label">Name</label>
                <input type="text" class="form-control form-control-lg" placeholder="Name" required name="name"
                  id="name">
              </div>
              <div class="col-md-12">
                <label class="form-label">Contact No.</label>
                <input type="text" class="form-control form-control-lg" required placeholder="Contact No."
                  name="contact" id="contact">
              </div>
              <div class="col-md-12">
                <label class="form-label">password</label>
                <input type="password" class="form-control form-control-lg" required placeholder="password"
                  name="password" id="password">
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit" id="submit"
                  onclick="openPopup()">Submit</button>

                <div class="popup" id="popup">
                  <img src="assets/img/tick.png">
                  <h2>Thank You!</h2>
                  <p>Your Details has been successfully submitted</p>
                  <button type="button" onclick="closePopup()">OK</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    </div>











    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"></script>


    <script>
      let popup = document.getElementById("popup");

      function openPopup() {
        popup.classList.add("open-popup");
      }
      function closePopup() {
        popup.classList.remove("open-popup");
      }
    </script>
</body>

</html>