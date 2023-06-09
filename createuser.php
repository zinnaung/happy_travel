<?php
  include 'db_config.php';


  $password_pw = $_POST['password_pw'];
  $password_pw_2 = $_POST['password_pw_2'];

  if($password_pw != $password_pw_2) {
    header('Location: toroku.php?passerror=true');
    exit();
  }

  $password_pw = md5($password_pw);

  $member_name = $_POST['member_name'];
  $member_kana = $_POST['member_kana'];
  $zip_zp = $_POST['zip_zp'];
  $address_ad = $_POST['address_ad'];
  $number_nb = $_POST['number_nb'];
  $mail_ml = $_POST['mail_ml'];
  $mail_ml_2 = $_POST['mail_ml_2'];


  // PHP SQL INSERT DATA
  $sql = "INSERT INTO S2021_users_tbl (id, member_name, member_kana, zip_zp, address_ad, number_nb, mail_ml, mail_ml_2,password_pw,point_pt,delete_ku,insert_nb,update_nb) VALUES (NULL, '$member_name', '$member_kana', '$zip_zp', '$address_ad', '$number_nb', '$mail_ml', '$mail_ml_2','$password_pw','0','1','2022-01-19','2022-01-19');";


  if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['user_logged_in'] = $member_name;
    header('Location: index.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
