<?php

include 'db_config.php';

session_start();
$userid = $_SESSION['user_id'];

  $member_name = $_POST['member_name'];
  $member_kana = $_POST['member_kana'];
  $zip_zp = $_POST['zip_zp'];
  $address_ad = $_POST['address_ad'];
  $number_nb = $_POST['number_nb'];
  $mail_ml = $_POST['mail_ml'];
  $mail_ml_2 = $_POST['mail_ml_2'];



$sql = "UPDATE S2021_users_tbl SET member_name='$member_name', member_kana='$member_kana', zip_zp='$zip_zp', address_ad='$address_ad', number_nb='$number_nb', mail_ml='$mail_ml', mail_ml_2='$mail_ml_2' WHERE id='$userid'";


              $_SESSION['user_logged_in'] = $member_name;


if($conn->query($sql) === True) {
   header("Location: index.php");
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>