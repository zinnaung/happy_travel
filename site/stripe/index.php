
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
    <style>
        .logo-panel{
            text-align: center;
        }
    </style>
</head>
<body>
    
	<?php require_once("config.php");

     
$n =  $_SESSION['total_price'];

$n = $n * 100;


	 ?>

	<form action="success.php" method="post">
		<script type="text/javascript" src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $test_keys['publishable_key']; ?>" 
		data-name="Online Payment"
		
		data-image="logo1.png"
		data-amount="<?php echo $n ?>"
		data-currency="JPY"
		

		>
			
		</script>
	</form>

</body>
</html>