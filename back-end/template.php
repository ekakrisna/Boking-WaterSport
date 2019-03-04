<?php
return '
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to PiguraSari </title>
    <style media="screen">
      p,tr,td {
        color: black;
      }
      h1{
        align-text: center;
      }
    </style>
  </head>
  <body>
  <h1>INVOICE BOOKING PANDAN SARI</h1>
    <table>
      <tr>
        <td><b>From</b></td>
        <td>:</td>
        <td>Pandan Sari</td>
      </tr>
      <tr>
        <td>Code Confirm</td>
        <td>:</td>
        <td>'.$random.'</td>
      </tr>
      <tr>
        <td>Date Order</td>
        <td>:</td>
        <td>'.$tanggal.'</td>
      </tr>
      <tr>
        <td>For Date</td>
        <td>:</td>
        <td>'.$date.'</td>
      </tr>
      <tr>
        <td>About</td>
        <td>:</td>
        <td>Booking Watersport Pigura Sari</td>
      </tr>
      <tr>
        <td><b>To</b></td>
      </tr>
      <tr>
        <td>Nama Pemesan</td>
        <td>:</td>
        <td>'.$first_name.' '.$last_name.'</td>
      </tr>
      <tr>
        <td>Phone</td>
        <td>:</td>
        <td>'.$phone.'</td>
      </tr>
      <tr>
        <td>City</td>
        <td>:</td>
        <td>'.$city.'</td>
      </tr>
      <tr>
        <td>Address</td>
        <td>:</td>
        <td>'.$address.'</td>
      </tr>
    </table>
      <h1>Thanks You For Booking With us!!!</h1>
        <table style="border: 2px solid black;  border-collapse: collapse; width: 500px; height: 200px;">
        <caption><h2>Detail Order</h2></caption>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <th>Product</th>
            <th style="border: 1px solid black;  border-collapse: collapse;">Qty</th>
            <th style="border: 1px solid black;  border-collapse: collapse;">Unit Price</th>
            <th style="border: 1px solid black;  border-collapse: collapse;">Price</th>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Parasailing</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$parasailing.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargaparasailing.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalparasailing.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Banana</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$banana.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargabanana.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalbanana.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Jet Ski</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$jetski.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargajetski.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totaljet.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Fly Fish</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$flyfish.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargaflyfish.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalflyfish.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Scuba Diving</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$scubadiving.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargascubadiving.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalscubadiving.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Snorkeling</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$snorkeling.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargasnorkeling.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalsnorkeling.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Snorkeling + Glass Boat + Turtle Island</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$glass.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargaglass.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalglass.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Glass Boat + Turtle Island</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$turtleisland.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargaturtle.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalturtleisland.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Mangrove</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$mangrove.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargamangrove.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalmangrove.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Water Skiing</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$waterskiing.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargawaterskiing.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalwaterskiing.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Sea Walker</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$seawalker.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargaseawalker.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalseawalker.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Fly Board</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$flyboard.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargaflyboard.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalflyboard.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Donur Rolling</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$donutfly.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargadonutfly.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totaldonutfly.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Trawling Fishing</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$trawling.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargatrawling.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totaltrawling.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Coral Fishing</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$coral.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargacoral.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalcoral.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Spear Fishing</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$spear.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargaspear.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalspear.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Package A</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$paketa.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargapaketa.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalpaketa.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Package B</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$paketb.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargapaketb.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalpaketb.'</td>
          </tr>
          <tr style="border: 1px solid black;  border-collapse: collapse;">
            <td>Package C</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">'.$paketc.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$hargapaketc.'</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalpaketc.'</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Total</td>
            <td style="border: 1px solid black;  border-collapse: collapse;">Rp.'.$totalprice.'</td>
          </tr>
        </table>
        <td><br></td>
        <table>
          <tr>
            <td><b>Prices Include Insurance, Taxes, Required Equipment</b></td>
          </tr>
          <td><br></td>
          <tr>
            <td><b>How To Pay ?</b></td>
          </tr>
          <tr>
            <td>- Transfer To a Number of Accounts Rp.'.$totalprice.'</td>
          </tr>
          <td><br></td>
          <tr>
            <td><b>This Is Our Account Number For The Transfer Of Payments Is Rp.'.$totalprice.'</b></td>
          </tr>
          <tr>
            <td>- BCA, Account Number 7720745890 p.p. Milla </td>
          </tr>
          <td><br></td>
          <tr>
            <td><b style="color:red;">Important</b> <b>(Please Read Well !!!)</b></td>
          </tr>
          <tr>
            <td>- Please Confirm Payment To 081916404488 / 081239890449 / 081353399811 (WhatsApp, SMS, phone) or email: pandansari.marine@gmail.com With The Format: Confirm <b>'.$random.'</b></td>
          </tr>
          <tr>
            <td>- After We Receive Payment, We Will Send A Voucher Via Email / WhatsApp</td>
          </tr>
          <tr>
            <td>- Vouchers function as watersport entry tickets, it is recommended to be taken to the location of the game during the day. Vouchers can be printed or shown via tablet / mobile to the watersport guide.</td>
          </tr>
        </table>
        <p>Thank you for your attention. We are waiting for further confirmation and good news.</p>
        <p>From,</p>
        <table>
          <tr>
            <td><b>Pandan Sari Dive & Watersport</b></td>
          </tr>
          <tr>
            <td>www.pandansari.com</td>
          </tr>
          <tr>
            <td>Directur Of Pandan Sari Dive & Watersport</td>
          </tr>
          <tr>
            <td>Jalan Pratama Perempatan Agung No. 107 Tanjung Benoa Nusa Dua, Badung-80361, Bali, Indonesia</td>
          </tr>
          <tr>
            <td>Phone. 0361-472 8126</td>
          </tr>
          <tr>
            <td>Handphone. 081916404488 / 081239890449(WhatsApp)</td>
          </tr>
          <tr>
            <td>Email pandansari.marine@gmail.com / agustinobsc@yahoo.com</td>
          </tr>
          <tr>
            <td>Find Us At :</td>
          </tr>
          <tr>
            <td><a href="https://www.facebook.com/ekakrisnaputra">Facebook</a></td>
          </tr>
          <tr>
            <td><a href="https://www.twitter.com/ekakrisnaputra">Twitter</a></td>
          </tr>
        </table>
  </body>
</html>';
?>
