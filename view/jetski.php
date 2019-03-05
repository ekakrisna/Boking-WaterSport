<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JET SKI || Pandan Sari Dive & Water Sports</title>
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
      <nav id="sidebar">
          <!-- <div class="sidebar-header">
            <a href="index.php"><img src="img/logo.jpg"  style="width:210px; height:auto;" alt=""></a>
          </div> -->
          <ul class="list-unstyled components">
            <li>
                <a href="../index.php">Home</a>
            </li>
              <li>
                  <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Activity</a>
                  <ul class="collapse list-unstyled" id="pageSubmenu">
                      <li>
                          <a href="parasailing.php">Parasailing</a>
                      </li>
                      <li>
                          <a href="banana.php">Banana Boat</a>
                      </li>
                      <li>
                          <a href="jetski.php">Jet Ski</a>
                      </li>
                      <li>
                          <a href="flyboard.php">Fly Board</a>
                      </li>
                      <li>
                          <a href="flyfish.php">Fly Fish</a>
                      </li>
                      <li>
                          <a href="donutfly.php">Donut Fly</a>
                      </li>
                      <li>
                          <a href="scubadiving.php">Scuba Diving</a>
                      </li>
                      <li>
                          <a href="snorkeling.php">Snorkeling</a>
                      </li>
                      <li>
                          <a href="seawalker.php">Sea Walker</a>
                      </li>
                      <li>
                          <a href="mangrove.php">Mangrove Tour</a>
                      </li>
                      <li>
                          <a href="waterskiing.php">Water Skiing</a>
                      </li>
                      <li>
                        <a href="glassboat.php">Glass Bottom Boat Tour</a>
                      </li>
                      <li>
                          <a href="fishing.php">Fishing</a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="galeri.php">Galeri</a>
              </li>
              <li>
                  <a href="contact.php">About Us</a>
              </li>
          </ul>
      </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-dark">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-info d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php#games">Activity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php#package">Package</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../view/boking.php">Booking</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- <video width="400" controls autoplay style="border-radius: 8px;">
              <source src="img/Animasi Dampak.MP4" type="video/mp4">
              <source src="mov_bbb.ogg" type="video/ogg">
            </video> -->
            <img src="../img/Milla_180030384_JE183.jpg" class="center"  alt="">
            <br><br>
            <!-- <div class="line"></div> -->
            <h3 id="testimoni" class="text-center text-white">Jet Ski</h3>
            <p class="text-justify rata">Jet Ski adalah salah satu olahraga air yang paling banyak diminati. Jet ski bisa disebut perahu motor. Permainan ini dimainkan sekitar 15 menit dan sudah dilengkapi dengan jaket pelampung serta ditemani oleh pemandu jet ski professional untuk menjamin keselamatan anda dan memberikan anda pengalaman bermain jet ski yang aman dan nyaman.</p>
            <p class="text-justify rata">Pandan Sari Dive & Watersport adalah pengelola watersport yang lengkap, murah dan nyaman. Menurut Managing Director Pandan Sari, Agus Sujata, kepuasan pelanggan adalah tujuan utama. “Kami memperlakukan pelanggan kami sebagai bagian dari keluarga kami dan persahabatan adalah aturan dalam kami menjalankan bisnis,”ujar Agus.</p>
            <div class="line"></div>
            <form name="autoSumForm" class="" action="../back-end/insert.php" method="post">
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Booking</h5>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                      <div class="modal-body">
                        <?php if (isset($_GET['alert'])): ?>
                          <?php if ($_GET['alert'] == "success"): ?>
                            <div class="alert alert-success alert-dismissible">
                              Succeed!!!, Please Check Email
                            </div>
                          <?php endif; ?>
                          <?php if ($_GET['alert'] == "danger"): ?>
                            <div class="alert alert-danger alert-dismissible">
                              Failed!!!, Please Check Again
                            </div>
                          <?php endif; ?>
                          <?php if ($_GET['alert'] == "nonefields"): ?>
                            <div class="alert alert-danger alert-dismissible">
                              Please Check!!!, Field Empty
                            </div>
                          <?php endif; ?>
                        <?php endif; ?>
                        <div class="form-group">
                          <input class="form-control" id="first_name" name="first_name" type="text" placeholder="First Name">
                        </div>
                        <div class="form-group">
                          <input class="form-control" id="last_name" name="last_name" type="text" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                          <input class="form-control" id="email" name="email" type="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" id="address" name="address" rows="4" cols="30" placeholder="Address"></textarea>
                        </div>
                        <div class="form-group">
                          <input class="form-control" id="phone" name="phone" type="tel" placeholder="Mobile Phone">
                        </div>
                        <div class="form-group">
                          <input class="form-control" id="city" name="city" type="text" placeholder="City">
                        </div>
                        <div class="form-group">
                          <h6 class="text-justify text-dark">For Date</h6>
                          <input class="form-control" id="date" name="date" type="date">
                        </div>
                        <div class="box-footer">
                          <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Booking"></input>
                        </div>
                      </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row rata">
                <div class="col-lg-3">
                  <div class="card-basic">
                    <img class="card-img-top" src="../img/jetski.jpg" alt="banana">
                    <div class="card-body">
                      <h4 class="card-title text-center text-light">
                        Jet Ski
                      </h4>
                      <p class="text-center text-light">Rp. 120.000</p>
                      <input type="hidden" name="jumlah2" id="jumlah2" class="" value="120000" />
                      <input  class="form-control" type="number" name="jetski" value="0" min="0" id="jetski" placeholder="Person/15 Minute" onFocus="startCalc();" onBlur="stopCalc();">
                      <input readonly type="text" name="total" value="0" class="form-control" onchange='tryNumberFormat(this.form.thirdBox);'>
                      <button type="button" class="btn btn-info btn-lg center-card" data-toggle="modal" data-target="#myModal">Booking</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <h3 style="color:red;">Additional Information</h3>
                  <p>Before filling out the form below, please read well :</p>
                  <p>* Prices below are per-person prices and specifically for domestic tourists (WNI) or Kitas Holder</p>
                  <p>* Child Prices = Adult Prices</p>
                  <p>* Age to be able to join watersports 7 - 65 years, except snorkeling, scuba diving, seawalker, flyboard, waterski, wakeboard at least 12 years old</p>
                  <p>* Fill in the number of people in the 'Quantity' column with numbers or numbers only</p>
                </div>
              </div>
            </form>
          <br>
          <footer class="page-footer footer-fixed font-small blue-grey lighten-5">
              <div class="bg-dark shadow-lg p-2 mb-6 rounded">
                <div class="container">
                  <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                      <h6 class="mb-0 text-white">Get connected with us on social networks!</h6>
                    </div>
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                      <a href="https://www.instagram.com/pandansari_watersport/?hl=id" class="ins-ic">
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
              <div> <a href="https://api.whatsapp.com/send?phone=6281353399811&text=Om%20Swastiastu%20Saya%20Mau%20Booking%20Watersport" style="display: table-cell; vertical-align: middle;" class="fab fa-whatsapp"></a></div>
              <div> <a href="#" style="display: table-cell; vertical-align: middle;" class="fab fa-twitter"></a> </div>
              <div> <a href="https://www.instagram.com/pandansari_watersport/?hl=id" style="display: table-cell; vertical-align: middle;" class="fab fa-instagram"></a> </div>
              <div class='menu'>
                <div class='share' id='ss_toggle' data-rot='180'>
                  <div class='circle'></div>
                  <div class='bar'></div>
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
  <script>
    function startCalc(){
      interval = setInterval("calc()",1);
    }
    function calc(){
      one = document.autoSumForm.jetski.value;
      two = document.autoSumForm.jumlah2.value;
      document.autoSumForm.total.value = (one * two);
    }
    function stopCalc(){
      clearInterval(interval);
    }
  </script>
  <!-- Calculate  -->
  <!-- ICON  -->
  <script src="../js/medsos.js"></script>
  <script src="../js/sosmed.js"></script>
  <!-- ICON  -->
</html>
