<?php
  require_once "../back-end/connect.php";
  require '../PHPMailer-master/PHPMailerAutoload.php';
  // var_dump($message);
  //Random String
  function generateRandomString($length = 5) {
    $characters = 'ABCDEFGHIJKLMN123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
  //action Button
  if (isset($_POST['submit'])) {
    $random = generateRandomString();
    $checkrandom = mysqli_query($connect,"SELECT random from transaksi Where random = '$random'");
    if (mysqli_num_rows($checkrandom)>0) {
      $random = generateRandomString();
    }

    //Biodata
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $date = $_POST['date'];

    //Perhitungan Gambar
    $parasailing = $_POST['parasailing'];
    $totalparasailing = $parasailing * 270000;
    $banana = $_POST['banana'];
    $totalbanana = $banana * 60000;
    $jetski = $_POST['jetski'];
    $totaljet = $jetski * 120000;
    $flyfish = $_POST['flyfish'];
    $totalflyfish = $flyfish * 120000;
    $scubadiving = $_POST['scubadiving'];
    $totalscubadiving = $scubadiving * 220000;
    $snorkeling = $_POST['snorkeling'];
    $totalsnorkeling = $snorkeling * 120000;
    //
    $glass = $_POST['glass'];
    $totalglass = $glass * 270000;
    $turtleisland = $_POST['turtleisland'];
    $totalturtleisland = $turtleisland * 130000;
    //
    $mangrove = $_POST['mangrove'];
    $totalmangrove = $mangrove * 270000;
    $waterskiing = $_POST['waterskiing'];
    $totalwaterskiing = $waterskiing * 270000;
    $seawalker = $_POST['seawalker'];
    $totalseawalker = $seawalker * 270000;
    $flyboard = $_POST['flyboard'];
    $totalflyboard = $flyboard * 470000;
    $donutfly = $_POST['donutfly'];
    $totaldonutfly = $donutfly * 90000;
    $trawling = $_POST['trawling'];
    $totaltrawling = $trawling * 1800000;
    $coral = $_POST['coral'];
    $totalcoral = $coral * 1700000;
    $spear = $_POST['spear'];
    $totalspear = $spear * 1300000;
    $paketa = $_POST['paketa'];
    $totalpaketa = $paketa * 225000;
    $paketb = $_POST['paketb'];
    $totalpaketb = $paketb * 270000;
    $paketc = $_POST['paketc'];
    $totalpaketc = $paketc * 225000;

    //Harga
    $hargaparasailing = 270000;
    $hargabanana = 60000;
    $hargajetski = 120000;
    $hargaflyfish = 120000;
    $hargascubadiving = 220000;
    $hargasnorkeling = 120000;
    $hargamangrove = 270000;
    //
    $hargaglass = 270000;
    $hargaturtle = 130000;
    //
    $hargawaterskiing = 270000;
    $hargaseawalker = 270000;
    $hargaflyboard = 470000;
    $hargadonutfly = 90000;
    $hargatrawling = 1800000;
    $hargacoral = 1700000;
    $hargaspear = 1300000;
    $hargapaketa = 225000;
    $hargapaketb = 270000;
    $hargapaketc = 225000;

    //Total
    $total = $_POST['total'];
    $totalprice = $totalparasailing+$totalbanana+$totaljet+$totalflyfish+$totalscubadiving+$totalsnorkeling+$totalglass+$totalturtleisland+$totalmangrove+$totalwaterskiing+$totalseawalker+$totalflyboard+$totaldonutfly+$totaltrawling+$totalcoral+$totalspear+$totalpaketa+$totalpaketb+$totalpaketc;
    $tanggal = date("Y-m-d H:i:s");
    // $deposit = $totalprice / 2;

    //Email
    $mail = new PHPMailer();
    $mail ->IsSmtp();
    $mail ->SMTPDebug = 0;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = 'smtp.gmail.com';
    $mail ->Port = 465; // or 587
    $mail ->IsHTML(true);
    $mail ->Username = 'namabelakang11@gmail.com';
    $mail ->Password = 'ekakrisna123';
    $mail ->SetFrom('admin@yourdomain.com', 'Pandan-Sari');
    $mail ->Subject = 'Confimation Booking';

    //Ngambil Template
    $message = require_once "../back-end/template.php";
    $mail ->Body = $message;
    $mail ->AddAddress($email);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location:../index.php?alert=success");
    } else {
      header("Location:../index.php?alert=failed");
    }
    if (!$mail->Send() || !$first_name || !$last_name || !$email || !$address || !$phone || !$city || !$date) {
      header("Location:../index.php?alert=nonefields");
    } else {
      $insertData = mysqli_query($connect, "INSERT INTO transaksi VALUES('','$random','$first_name','$last_name','$email','$address','$phone','$city','$date','$parasailing','$banana','$jetski','$flyfish','$scubadiving','$snorkeling','$glass','$turtleisland','$mangrove','$waterskiing','$seawalker','$flyboard','$donutfly','$trawling','$coral','$spear','$paketa','$paketb','$paketc','$totalprice','$tanggal')");
      // var_dump($insertData);
      if ($insertData) {
        var_dump($insertData);
        header("Location:../index.php?alert=success");
      } else {
        header("Location:../index.php?alert=danger");
      }
    }
  }
?>
