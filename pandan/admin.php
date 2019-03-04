<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN || Pandan Sari Dive & Water Sports</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/menu.css">
    <style media="screen">
      html{
        scroll-behavior: smooth;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                    <button class="btn btn-info d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php#games">Activity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../view/galeri.php">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../view/boking.php">Booking</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <br><br><br><br>
            <h1 class="center-card text-white">Login</h1>
            <br>
            <div class="col-lg-3 center-card text-light">
              <div class="login-logo">
                <a href="index.php"><b class="text-dark">ADMIN</b> PANDAN SARI</a>
              </div>
              <div class="login-box-body">
                <br>
                <form class="" action="../back-end/login.php" method="post">
                  <?php if (isset($_GET['alert'])): ?>
                    <?php if ($_GET['alert'] == "failed"): ?>
                      <div class="alert alert-danger">
                        Failed
                      </div>
                    <?php endif; ?>
                    <?php if ($_GET['alert'] == "nonefields"): ?>
                      <div class="alert alert-danger">
                        Empty Field
                      </div>
                    <?php endif; ?>
                  <?php endif; ?>
                  <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="row">
                    <div class="col">
                      <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Sign In</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <br>
          <footer class="page-footer footer-fixed font-small blue-grey lighten-5">
              <div class="bg-dark shadow-lg p-2 mb-6 rounded">
                <div class="container">
                  <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                      <h6 class="mb-0 text-white">Get connected with us on social networks!</h6>
                    </div>
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                      <a href="https://www.instagram.com/pandansari-watersport" class="ins-ic">
                        <i class="fab fa-instagram white-text  mr-4" style="color:white;"> </i>
                      </a>
                      <a href="#" class="fb-ic">
                        <i class="fab fa-facebook-f white-text mr-4" style="color:white;"> </i>
                      </a>
                      <a href="#" class="tw-ic">
                        <i class="fab fa-twitter white-text mr-4" style="color:white;"> </i>
                      </a>
                      <a href="#" class="gplus-ic">
                        <i class="fab fa-google-plus-g white-text mr-4" style="color:white;"> </i>
                      </a>
                      <a href="#" class="li-ic">
                        <i class="fab fa-linkedin-in white-text" style="color:white;"> </i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container text-center text-md-left mt-5">
                <div class="row mt-3 dark-grey-text">
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h4 class="text-white">Location</h4>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto bg-light" style="width: 60px;">
                    <div class="map-area" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.3133424265798!2d115.21939511438744!3d-8.756560191811888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd243ba2d9e34a1%3A0x69f7f12ca183d54f!2sPandan+Sari+Watersport!5e0!3m2!1sid!2sid!4v1551087087699" width="200" height="200" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h4 class="text-white">Pandan Sari</h4>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto bg-light" style="width: 60px;">
                    <p class="text-justify" style="font-size:15px;">Pandan Sari Dive & Watersport adalah pengelola watersport yang lengkap, murah dan nyaman. Menurut Managing Director Pandan Sari, Agus Sujata, kepuasan pelanggan adalah tujuan utama</p>
                  </div>
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h4 class="text-white">Activity</h4>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto bg-light" style="width: 60px;">
                    <p style="font-size:15px;">
                      <a class="dark-grey-text" href="../index.php#games">Activity</a>
                    </p>
                    <p style="font-size:15px;">
                      <a class="dark-grey-text" href="../view/fishing.php">Fishing</a>
                    </p>
                    <p style="font-size:15px;">
                      <a class="dark-grey-text" href="../index.php#package">Package</a>
                    </p>
                    <p style="font-size:15px;">
                      <a class="dark-grey-text" href="../view/galeri.php#testimoni">Galeri</a>
                    </p>
                  </div>
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h4 class="text-white">Contact</h4>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto bg-light" style="width: 60px;">
                    <p style="font-size:15px;">
                      <i class="fas fa-home mr-3"></i>Jalan Pratama Perempatan Agung no. 107 Tanjung Benoa Nusa Dua, Badung – 80361, Bali, Indonesia</p>
                    <p style="font-size:15px;">
                      <i class="fas fa-envelope mr-3"></i>pandansari.marine@gmail.com / agustinobsc@yahoo.com</p>
                    <p style="font-size:15px;">
                      <i class="fas fa-mobile mr-3"></i>081353399811/ 081916404488</p>
                    <p style="font-size:15px;">
                      <i class="fas fa-fax mr-3"></i>0361-4728126</p>
                  </div>
                </div>
              </div>
              <div class="footer-copyright text-center text-white-50 py-3">© 2019 Copyright:
                <a class="text-white" href="www.naratamaweb.com"> NaratamaWeb</a>
              </div>
            </footer>
            <div id='ss_menu'>
              <div> <a href="#" style="display: table-cell; vertical-align: middle; "class="fab fa-facebook-messenger"></a></div>
              <div> <a href="https://bit.ly/2Uc8uFf" style="display: table-cell; vertical-align: middle;" class="fab fa-whatsapp"></a></div>
              <div> <a href="#" style="display: table-cell; vertical-align: middle;" class="fab fa-twitter"></a> </div>
              <div> <a href="https://www.instagram.com/pandansari-watersport/" style="display: table-cell; vertical-align: middle;" class="fab fa-instagram"></a> </div>
              <div class='menu'>
                <div class='share' id='ss_toggle' data-rot='180'>
                  <div class='circle'></div>
                  <div class='bar'></div>
                </div>
              </div>
            </div>
      </div>
    </div>
  </body>
  <!-- Menu Icon  -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <!-- Menu Icon  -->
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="../js/sidebar.js"></script>
  <!-- Bootstrap JS -->
  <!-- Calculate  -->
  <script src="../js/calculate.js"></script>
  <!-- Calculate  -->
  <!-- ICON  -->
  <script src="../js/medsos.js"></script>
  <script src="../js/sosmed.js"></script>
  <!-- ICON  -->
  <!-- Calculate  -->
  <script src="../js/slideimg.js"></script>
  <!-- Calculate  -->
</html>
