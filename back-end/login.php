<?php
  require "connect.php";
  session_start();
  if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $selectquery = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' && password='$password'");
  if (!$username || !$password) {
    header("Location:../pandan/admin.php?alert=nonefields");
  } else {
    if (mysqli_num_rows($selectquery) > 0) {
      $_SESSION['username'] = $username;
      header("Location:../pandan/dashboard.php");
    } else {
      header("Location:../pandan/admin.php?alert=failed");
    }
  }
  }
?>
