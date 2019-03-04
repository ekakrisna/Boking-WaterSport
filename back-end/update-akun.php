<?php
  require_once "connect.php";
  $id = mysqli_escape_string($connect, $_POST['id']);
  $username      = mysqli_escape_string($connect, $_POST['username']);
  $password    = mysqli_escape_string($connect, $_POST['password']);
  if (!$username || !$password) {
    header("Location:../pandan/akun.php?option=edit&id=".$id."&alert=nonefields");
  } else {
    $inserting_data = mysqli_query($connect, "UPDATE user SET username ='$username', password ='$password' WHERE id='$id'");
    if ($inserting_data) {
      header("Location:../pandan/akun.php?option=edit&id=".$id."&alert=success");
    } else {
      header("Location:../pandan/akun.php?option=edit&id=".$id."&alert=danger");
    }
  }
?>
