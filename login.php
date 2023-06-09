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
                  <a class="nav-link active" aria-current="page" href="quiz.html">クイズ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./site/index.php">ショッピング</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">トップページ</a>
                </li>
              </ul>
        </nav>
    </header>
        <!-- LOGIN -->
        <div class="mainlg">
            <div class="container-lg">
                <div class="login_area">
                    <h1>ログイン</h1>
                    <p>会員IDとパスワードを入力して、<br> ログインボタンをクリックしてください。
                    </p>
                    <form action="loginuser.php" method="post">
                    <input class="inputtext" type="text" placeholder="   ID" name="member_name"><br>
                    <input class="inputtext" type="password" placeholder="   Password" name="password_pw"><br>
                    <label><input style="margin-left: 30px;" type="checkbox" name="sub" value="eng">ログイン状態を保存する</label><br>
                    <?php if($_GET['error'] ?? null) {?>
    <p style="color:red">メールまたはパスワードが違います。</p>
   <?php } ?>
                    <button id="button" type="submit">ログイン</button>
                    </form>
                </div>

                <p class="moji">会員IDは半角で入力してください。<br> パスワードは半角、全角、英語字を全て含めて入力してください。
                    <br> 記号、特殊文字などは入力出来ません。
                </p>

                <ul class="lg">
                    <li><a href="touroku.php">新規会員登録</a></li>
                    <li><a href="#">会員ID・パスワード忘れた方はこちらから</a></li>
                    <li><a href="#">よくある質問</a></li>
                </ul>
            </div>
        </div>
        <!-- LOGIN -->
    </div>
    </div>
    <footer class="footer">
        <div class="container">
 
            <div class="row">
                <div class="footer-col">
                    <h4>SHOPPING</h4>
                    <ul>
                        <li><a href="#">FOOD</a></li>
                        <li><a href="#">SOUVENIR</a></li>
                        <li><a href="#">プレゼント</a></li>
                    </ul>
                </div>
                <div class="footer-col" style="margin-right: 150px;">
                    <h4>QUIZ</h4>
                    <ul>
                        <li><a href="#">間違い探しゲーム</a></li>
                        <li><a href="#">三択クイズ</a></li>
                        
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
     <li style="border-left: 0.1px solid rgb(151, 146, 146);"><a style="text-decoration: none;color: #295A43;" href="">お問い合わせ</a></li>
     <li style="margin-left: 250px;"></a>Copy right(C) 2021 TSB All rights reserved.</li>
    </ul>
</div>    
</body>
</html>