<?php 

include("header.php");

 ?>
 <link rel="stylesheet" href="css/stylebase.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="main">
    <header>
        <nav>
          <a href="../index.php"><img class="logo_left" src="css/コンポーネント 6 – 2.png" alt=""></a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../quiz.html">クイズ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">ショッピング</a>
                  
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../login.php">ログイン</a>
                </li>
                
              </ul>
        </nav>
        <div class="conimg">
          <img class="imgcenter" src="css/グループ 9.png" alt="">
          <div class="centered">ショッピング</div>
        </div>
        <div class="wrap">
      <div class="serach-panel flex">
        <div class="text">Topページ > ショッピング</div>
        <div class="search-box flex-center">
          <input type="text" placeholder="search">
          <img src="./images/img_search.png" alt="" class="search-icon">
        </div>
        <div class="flex-center cart">
          <a href="base2.php" target="_blank">
          <img src="images/img_cart.png" alt="">
          <span>カート</a></span>
    </header><br>
    <!-- 次の内容下記に入力してください↓↓↓↓↓↓↓↓↓↓↓↓↓↓ -->
	<div class="container-fluid my-5">
    <div class="" id="pagination">
      
    </div>
		<div class="col-md-12">
			<div class="row show_data">
				
			</div>
		</div>
	</div>


	<script type="text/javascript">
		
       $(document).ready(function(){
           
             load_data();
           function load_data(page){


           	$.ajax({
               url: "ajax/load_data.php",
               method: "POST",
               data:{page:page},
               dataType:"JSON",
               success:function(data){
                $(".show_data").html(data.output);
                $("#pagination").html(data.pagination);
               }
           	});
           }

        $(document).on("click", ".pagination a",function(event){
        event.preventDefault();
          var id  = $(this).attr("id");
          load_data(id);
       });




           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
                $("#cart").text(data.da);
              }
           });
           }

       });






       $(document).on("click",".add_cart", function(event){
       	event.preventDefault();
           var id = $(this).attr("id");
           var name = $("#name"+id+"").val();
           var price = $("#price"+id+"").val();
           var quantity = $("#quantity"+id+"").val();
           var action = "add";


           $.ajax({
              url: "ajax/cart_action.php",
              method:"POST",
              dataType:"JSON",
              data: {id:id,name:name,price:price,quantity:quantity,action:action},
              success:function(data){
                 
              }
           });


       });


	</script>
 <!-- ↑↑↑↑↑↑↑↑↑↑↑↑ -->
 </div>
  <!--------footer--------->
  <footer>
    <div class="footerlast">
        <ul class="last">
         <li>A product of AAAGroups</li>
         <li style="border-left: 0.1px solid rgb(151, 146, 146);"><a style="text-decoration: none;color: #295A43;" href="">お問い合わせ</a></li>
         <li style="margin-left: 250px;"></a>Copy right(C) 2021 TSB All rights reserved.</li>
        </ul>
    </div>
  </footer>
</body>
</html>