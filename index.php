<?php
  session_start();

  $logged_in;
  if($_SESSION['user_logged_in'] ?? null){
    $logged_in = true;
  }
  else {
    $logged_in = false;
  }

  include 'db_config.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Travel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="main">
    <div class="mainbackground">
    <header>
        <nav>
            <ul class="nav justify-content-end">
            <li class="nav-item">
                  <a class="nav-link" href="#"> <?php
            if($logged_in){ ?>ようこそ <?php
                echo $_SESSION['user_logged_in'] ?? null;
               } else {
               ?>
          
               <?php } ?></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="mypage.php"> <?php
            if($logged_in){ ?>マイページ <?php
               } else {
               ?>
          
               <?php } ?></a>
                </li>

                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="quiz.html">クイズ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./site/index.php">ショッピング</a>
                </li>
                <li class="nav-item">
                <?php
          if($logged_in) {?>  
                  <a class="nav-link" href="logout.php">ログアウト</a>
                  <?php } 
                   else {
                    ?>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">ログイン</a>
                </li>
              </ul>
              <?php

       }
       ?>
        </nav>

    </header>
        <div class="mainlogo">
            <p>見ると出かけたくなるサイト</p>
            <img class="happy1" src="css/コンポーネント 6 – 2.png" alt="">
            <p>クイズやゲームを楽しみながら観光地の情報を得る</p>
            <p>特産物を購入できる</p>
        </div>
        <div class="mainicon">
            <div class="icon">
                <a href="#"><img src="css/about1.png" alt="about"></a>
                <p><a href="#" alt="about">ABOUT</a></p>
            </div>
            <div class="icon">
                <a href="./site/index.php"><img src="css/shoping.png" alt="shopping"></a>
                <p><a href="./site/index.php">SHOPPING</a></p>
            </div>
            <div class="icon">
                <a href="quiz.html"><img src="css/quiz.png" alt="quiz"></a>
                <p><a href="quiz.html">QUIZ</a></p>
            </div>
        </div>
        
        <div class="btn" >
            <a href="touroku.php"><button type="button" class="btn btn-outline-success">登録</button></a>
        </div>  
    </div>
    </div>
    <footer class="footer">
        <div class="container">
 
            <div class="row">
                <div class="footer-col">
                    <h4>SHOPPING</h4>
                    <ul>
                        <li><a href="#">FOOD</a></li>
                    </ul>
                </div>
                <div class="footer-col" style="margin-right: 150px;">
                    <h4>QUIZ</h4>
                    <ul>
                        <li><a href="game1.html">間違い探しゲーム</a></li>
                        <li><a href="santakugame1.html">三択クイズ</a></li>
                        
                    </ul>
                </div>
                <div class="footer-col" style="border-left: 00.1px solid rgb(151, 146, 146);">
                    <a href="#"><h4>ABOUT</h4></a>
                    <ul>
                        <li>We are a group of IT students of TSB. <br>
                            ○○○○○○○○○○○○○○○○○ <br>
                            ○○○○○○○○○○○○○○○○○ <br>
                            ○○○○○○○○○○○○○○○○○ <br>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
   </footer>
   <div class="footerlast"> 
    <ul class="last">
     <li style="margin-left: 135px;">A product of AAAGroups</li>
     <li style="border-left: 0.1px solid rgb(151, 146, 146);"><a style="text-decoration: none;color: #295A43;" href="contact.php">お問い合わせ</a></li>
     <li style="margin-left: 250px;"></a>Copy right(C) 2021 TSB All rights reserved.</li>
    </ul>
</div>    
</body>
</html>