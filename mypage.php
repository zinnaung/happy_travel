<?php
  session_start();

  $logged_in;
  if($_SESSION['user_logged_in'] ?? null){
    $logged_in = true;
  }
  else {
    $logged_in = false;
  }
  $userid = $_SESSION['user_id'];
  include 'db_config.php';

  $sql = "SELECT * FROM S2021_users_tbl WHERE id='$userid'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Travel</title>
    <link rel="stylesheet" href="css/mypage.css">
    <link rel="stylesheet" href="css/stylebase.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    button{
        float: right;
        margin: 30px;
        padding: 8px 8px 8px 8px;
    }
    h4{
        margin-top: 30px;
       margin-left: 30%;
       text-align: left;
       font-family: cursive;
    }
    .top{
        width: 80%;
    }
    .under{
        padding-top: 5%;
        width: 60%;
    }
    .out{
        font-size: 20px;
        background-color: #FF0000;
        color: white;
    }
    .taikai{
        background-color: #FF6633;
        font-size: 20px;
        
    }
    .rireki{
        font-size: 20px;
        background-color: #FFFF99;
       
    }
    .naiyou{
        font-size: 20px;
        background-color: #CCFF99;
    }
</style>
<body>
  <div class="main">
    <header>
        <nav>
          <a href="index.php"><img class="logo_left" src="css/コンポーネント 6 – 2.png" alt=""></a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">クイズ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ショッピング</a>
                </li>
              </ul>
        </nav>
        <div class="conimg">
          <img class="imgcenter" src="css/グループ 9.png" alt="">
          <div class="centered">My  Page</div>
        </div>
    </header>
    <!-- 次の内容下記に入力してください↓↓↓↓↓↓↓↓↓↓↓↓↓↓ -->
    <div class="border_name">
      <form action="#">
        <div class="border_namepoint">
          <form action="#">
              <table>
                  <tr>
                      <th>お名前</th>
                 <td><?php
            if($logged_in){ ?><?php
                echo $_SESSION['user_logged_in'] ?? null;
               } else {
               ?>
          
               <?php } ?>様</td>
           
                  </tr>
                  <tr>
                      <th>会得ポイント</th>
                    
                  </tr>
              </table>
          </form>
      </div>
      </form>
    </div>

    <div class="border">
   
      <form action="#">
                
          <a href="touroku_henkou.php?userid=<?php echo $row['id'] ?>"><button type="button">登録内容の変更</button></a>
          <a href=""><button type="button">履歴</button></a>
          <a href="logout.php"><button type="button">ログアウト</button></a>
          <a href="deleteuser.php?id=<?php echo $row["id"]; ?>"><button type="button">退会</button></a>

      </form>
    </div>
  <!-- ↑↑↑↑↑↑↑↑↑↑↑↑ -->
  </div>
    <div class="footerlast"> 
        <ul class="last">
         <li>A product of AAAGroups</li>
         <li style="border-left: 0.1px solid rgb(151, 146, 146);"><a style="text-decoration: none;color: #295A43;" href="">お問い合わせ</a></li>
         <li><a> style="margin-left: 250px;"></a>Copy right(C) 2021 TSB All rights reserved.</li>
        </ul>
    </div>    
</body>
</html>