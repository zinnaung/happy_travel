<?php
  include 'db_config.php';

  $userid = $_GET['userid'];

  $sql = "SELECT * FROM S2021_users_tbl WHERE id='$userid'";

  $result = $conn->query($sql);

  $row = $result->fetch_assoc();

  $member_name = $row['member_name'];
  $member_kana = $row['member_kana'];
  $zip_zp = $row['zip_zp'];
  $address_ad = $row['address_ad'];
  $number_nb = $row['number_nb'];
  $mail_ml = $row['mail_ml'];
  $mail_ml_2 = $row['mail_ml_2'];
  $password_pw = $row['password_pw'];
  $password_pw_2 = $row['password_pw_2'];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Travel</title>
    <link rel="stylesheet" href="css/stylebase.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/touroku.css">
</head>

<body>
    <div class="main">
        <header>
            <nav>
                <a href="index.php"><img class="logo_left" src="css/コンポーネント 6 – 2.png" alt=""></a>
                <ul class="nav justify-content-end">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">トップページ</a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">クイズ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ショッピング</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">EN・JA</a>
                    </li>
                </ul>
            </nav>
            <div class="conimg">
                <img class="imgcenter" src="css/グループ 9.png" alt="">
                <div class="centered">会員情報変更</div>
            </div>
        </header>
        <!-- 次の内容下記に入力してください↓↓↓↓↓↓↓↓↓↓↓↓↓↓ -->

            <div class="container">

                          <div class="border">
                    <form action="updateuser.php" method="post">
                        <label style="padding-right:130px;">名前</label><input type="text" name="member_name" placeholder="(例) 山田太郎" value="<?php echo $member_name ?>"><br>
                        <label style="padding-right:98px;">フリガナ</label><input type="text" name="member_kana" placeholder="(例) ヤマダタロウ"  value="<?php echo $member_kana ?>"><br>
                        <label style="padding-right:98px;">郵便番号</label><input type="text" name="zip_zp" placeholder="(例) 000-000"  value="<?php echo $zip_zp ?>"><br>
                        <label style="padding-right:130px;">住所</label><input type="text"  name="address_ad" placeholder="(例) 東京都○○○区○○-○○-○"  value="<?php echo $address_ad ?>"><br>
                        <label style="padding-right:98px;">電話番号</label><input type="text" name="number_nb" placeholder="(例) 000-0000-0000"  value="<?php echo $number_nb ?>"><br>
                        <label style="padding-right:50px;">メールアドレス</label><input type="email" name="mail_ml" placeholder="(例) aaaaaaaaa@gmail.com"  value="<?php echo $mail_ml ?>"><br>
                        <label style="padding-right:2px;">メールアドレス再入力</label><input type="email" name="mail_ml_2"  value="<?php echo $mail_ml_2 ?>"></label><br>
                        <button type="submit" id="buttontou">更新</button>
                    </form>
                    <p> <label id="remember" for="chk_remember"></label><input type="checkbox" name="f_ai" id="chk_remember" />
                        <span><a href="#">個人情報取り扱い・プライバシーポリシー</a></span>・
                        <span><a href="#">利用規約</a></span>に同意しました。<br>
                        アカウントをお持ちの方は<a href="login.php">こちら</a>
                    </p>


                </div>
                <p id="borderbotom">■個人情報について<br>ご登録いただきました個人情報は、日本ヴォーグ社が適切に管理し、特段の事情がない限りお客様の事前の承諾なしに<br> 第三者に対し提供・開示いたしません。詳細につきましてはプライバシーポリシーについてをご確認ください。
                </p>

            </div>
            </div>
    <div class="footerlast">
        <ul class="last">
            <li>A product of AAAGroups</li>
            <li style="border-left: 0.1px solid rgb(151, 146, 146);"><a style="text-decoration: none;color: #295A43;" href="">お問い合わせ</a></li>
            <li style="margin-left: 250px;">
                </a>Copy right(C) 2021 TSB All rights reserved.</li>
        </ul>
    </div>
 

        <!-- ↑↑↑↑↑↑↑↑↑↑↑↑ -->
    
</body>

</html>