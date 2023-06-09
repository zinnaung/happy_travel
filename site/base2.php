<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Travel</title>
    <link rel="stylesheet" href="css/stylebase.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
</head>
<body>
  <div class="main">
    <header>
        <nav>
          <a href="#"><img class="logo_left" src="css/コンポーネント 6 – 2.png" alt=""></a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">クイズ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">ショッピング</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ログイン</a>
                </li>
              </ul>
        </nav>
        <div class="conimg">
          <img class="imgcenter" src="css/グループ 9.png" alt="">
          <div class="centered">ショッピング</div>
        </div>
        <br>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<h1 class="text-white">HAPPY TRAVEL</h1>
		<div class="mr-auto"></div>
    <ul class="text-white navbar-nav">
    	
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php">Home</a>
      </li>
         <li class="nav-item">
        <a class="nav-link text-white" href="cart.php" >Cart<span id="cart" class="badge badge-warning mx-2"></span></a>
      </li>
         <li class="nav-item">
        <a class="nav-link text-white" href="add_new_product.php">Add New Product</a>
      </li>

        
    </ul>
		
	</nav>

    </header>
    <!-- 次の内容下記に入力してください↓↓↓↓↓↓↓↓↓↓↓↓↓↓ -->
    <?php 
     include("header.php");


	 ?>

	 <div class="container">
	 	<div class="col-md-12 get_cart my-5">
	 		
	 	</div>
	 </div>


	 <script type="text/javascript">
	 	$(document).ready(function(){
            
            show_mycart();
           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
              	$("#get_cart").html(data.out);
                $("#cart").text(data.da);
                $("#total").text(data.total);
              }
           });
           }

           setInterval(show_mycart,1000);

	 	});

	 	$(document).on("click",".remove",function(){
             var id = $(this).attr("id");

             var action = "delete";

              $.ajax({
              url: "ajax/cart_action.php",
              method:"POST",
              data:{id:id,action:action},
              dataType:"JSON",
              success:function(data){
              
              }
           });
	 	});

	 		$(document).on("click",".clearall",function(){
             var id = $(this).attr("id");

             var action = "clearall";

              $.ajax({
              url: "ajax/cart_action.php",
              method:"POST",
              data:{id:id,action:action},
              dataType:"JSON",
              success:function(data){
              
              }
           });
	 	});
	 </script>
    <!-- ↑↑↑↑↑↑↑↑↑↑↑↑ -->
  <footer>
    <div class="footerlast1">
        <ul class="last">
         <li>A product of AAAGroups</li>
         <li style="border-left: 0.1px solid rgb(151, 146, 146);"><a style="text-decoration: none;color: #295A43;" href="">お問い合わせ</a></li>
         <li style="margin-left: 250px;"></a>Copy right(C) 2021 TSB All rights reserved.</li>
        </ul>
    </div>    
  </footer>
</body>
</html>