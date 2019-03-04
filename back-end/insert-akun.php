<?php
  require_once "connect.php";
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (isset($_POST['tambah'])) {
  if (!$username || !$password) {
    echo "Masih Ada Data Yang Kosong!";
  } else {
    if (mysqli_num_rows($selectUser) > 0) {
      echo "Username Sudah Terdaftar";
    } else {
      $insertData = mysqli_query($connect, "INSERT INTO user VALUES('','$username','$password')");
      if ($insertData) {
        header("Location: ../pandan/akun.php");
      }
    }
  }
}
?>
