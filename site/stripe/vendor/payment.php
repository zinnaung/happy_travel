<?php
require './vendor/autoload.php';

// ご自身のAPIキーを入力
$secretKey = 'sk_test_xxxxxxxx';
$publicKey = 'pk_test_xxxxxxxx';

$stripe = new \Stripe\StripeClient($secretKey);

$session = $stripe->checkout->sessions->create([
    'payment_method_types' => ['card'],
    'line_items' => [[
        'price_data' => [
            'currency' => 'JPY',
            'product_data' => [
                'name' => '商品名',
            ],
            'unit_amount' => 100,
        ],
        'quantity' => 1,
    ]],
    'mode' => 'payment',
    // ご自身のサイトURLを入力
    'success_url' => 'https://192.168.56.101/success.php?session_id={CHECKOUT_SESSION_ID}',
    'cancel_url' => 'https://192.168.56.101/success.php?session_id={CHECKOUT_SESSION_ID}',
]);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>支払いページ</title>
<script src="https://js.stripe.com/v3/"></script>
</head>

<body>
<button id="checkout-button">支払う</button>
<script type="text/javascript">
  var stripe = Stripe('<?php echo $publicKey;?>');

  var checkoutButton = document.getElementById('checkout-button');
  checkoutButton.addEventListener('click', function() {
    stripe.redirectToCheckout({sessionId: "<?php echo $session->id;?>"})
    .then(function (result) {
      if (result.error) {
        // var displayError = document.getElementById('error-message');
        // displayError.textContent = result.error.message;
      }
    });
  });
</script>
</body>
</html>