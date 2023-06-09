<?php
  include 'db_config.php';

  $member_name = $_POST['member_name'];
  $password_pw = $_POST['password_pw']; //123

  
  // PHP SELECT DATA
  $sql = "SELECT id,member_name, password_pw FROM S2021_users_tbl WHERE member_name='$member_name'";

  $result = $conn->query($sql);
  
  if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
            $db_password = $row['password_pw'];
            $db_uname = $row['member_name'];

            if(md5($password_pw) == $db_password){
  
              session_start();
              $_SESSION['user_logged_in'] = $db_uname;
              $_SESSION['user_id'] = $row['id'];
              header('Location: index.php');
            }
            else {
              //password wrong
              header('Location: login.php?error=true');
            }
      }
  }
  else {
      //name wrong
      header('Location: login.php?error=true');
  }

?>
