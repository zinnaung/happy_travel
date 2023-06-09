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
                <a href="index.html"><img class="logo_left" src="css/コンポーネント 6 – 2.png" alt=""></a>
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
                <div class="centered">新規登録</div>
            </div>
        </header>
        <!-- 次の内容下記に入力してください↓↓↓↓↓↓↓↓↓↓↓↓↓↓ -->

            <div class="container">

                <p class="bordertop">
                    <span id="border1">お客様情報の入力</span><br>以下のフォームにお客様情報をご記入ください。<br> 入力完了後にページ下部の「確認へ進む」ボタンを押してください。</p>
                <div class="border">
                    <form action="createuser.php" method="post">
                        <label style="padding-right:130px;">名前</label><input type="text" name="member_name" placeholder="(例) 山田太郎"><br>
                        <label style="padding-right:98px;">フリガナ</label><input type="text" name="member_kana" placeholder="(例) ヤマダタロウ"><br>
                        <label style="padding-right:98px;">郵便番号</label><input type="text" name="zip_zp" placeholder="(例) 000-000"><br>
                        <label style="padding-right:130px;">住所</label><input type="text"  name="address_ad" placeholder="(例) 東京都○○○区○○-○○-○"><br>
                        <label style="padding-right:98px;">電話番号</label><input type="text" name="number_nb" placeholder="(例) 000-0000-0000"><br>
                        <label style="padding-right:50px;">メールアドレス</label><input type="email" name="mail_ml" placeholder="(例) aaaaaaaaa@gmail.com"><br>
                        <label style="padding-right:2px;">メールアドレス再入力</label><input type="email" name="mail_ml_2"></label><br>
                        <label style="padding-right:82px;">パスワード</label><input type="password" name="password_pw"><br>
                        <label style="padding-right:34px;">パスワード再入力</label><input type="password" name="password_pw_2"><br>
                        <button type="submit" id="buttontou">会員登録</button>
                    </form>
                    <p> <label id="remember" for="chk_remember"></label><input type="checkbox" name="f_ai" id="chk_remember" />
                        <span><a href="#">個人情報取り扱い・プライバシーポリシー</a></span>・
                        <span><a href="#">利用規約</a></span>に同意しました。<br>
                        アカウントをお持ちの方は<a href="login.php">こちら</a>
                    </p>


                </div>
                <p id="borderbotom">■個人情報について<br>ご登録いただきました個人情報は、日本ヴォーグ社が適切に管理し、特段の事情がない限りお客様の事前の承諾なしに<br> 第三者に対し提供・開示いたしません。詳細につきましてはプライバシーポリシーについてをご確認ください。
                </p>
                <div class="footerlast">
        <ul class="last">
            <li>A product of AAAGroups</li>
            <li style="border-left: 0.1px solid rgb(151, 146, 146);"><a style="text-decoration: none;color: #295A43;" href="">お問い合わせ</a></li>
            <li style="margin-left: 250px;">
                </a>Copy right(C) 2021 TSB All rights reserved.</li>
        </ul>
    </div>

            </div>
            </div>
    
 

        <!-- ↑↑↑↑↑↑↑↑↑↑↑↑ -->
    
</body>

</html>