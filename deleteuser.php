<?php
  include 'db_config.php';

  session_start();
  //deleteuser.php?userid=11;
  $userid = $_SESSION['user_id'];

  $sql = "DELETE FROM S2021_users_tbl WHERE id='$userid'";

  if($conn->query($sql)){
    header("Location: logout.php");
  }

?>
