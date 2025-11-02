<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $bank = htmlspecialchars($_POST['bank_name']);
  $amount = htmlspecialchars($_POST['amount']);

  echo "
  <html>
  <head>
    <title>Donation Received | Christ Is Love Deliverance Church</title>
    <link rel='stylesheet' href='style.css'>
  </head>
  <body>
    <h2>Thank You, $name!</h2>
    <p>We have received your intention to donate <b>$amount</b> via <b>$bank</b>.</p>
    <p>Our finance team will contact you at <b>$email</b> for confirmation.</p>
    <a href='index.php'>Go Back to Home</a>
  </body>
  </html>
  ";
}
?>
