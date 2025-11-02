<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Support / Donate | Christ Is Love Deliverance Church</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Christ Is Love Deliverance Church</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="live.php">Live Sermons</a>
      <a href="donate.php">Support / Donate</a>
    </nav>
  </header>

  <section class="donate">
    <h2>Support the Ministry</h2>
    <p>Your donation helps us spread the Gospel and reach more souls.  
       Please choose a payment method below:</p>

    <div class="donate-options">
      <div class="donate-box">
        <h3>Donate via PayPal</h3>
        <form action="https://www.paypal.com/donate" method="post" target="_blank">
          <!-- Replace with your PayPal credentials -->
          <input type="hidden" name="business" value="YOUR_PAYPAL_EMAIL_HERE">
          <input type="hidden" name="currency_code" value="USD">
          <label>Donation Amount (USD)</label>
          <input type="number" name="amount" placeholder="Enter amount" required>
          <button type="submit">Donate via PayPal</button>
        </form>
      </div>

      <div class="donate-box">
        <h3>Donate via Bank / Credit Card</h3>
        <form action="send_donate.php" method="post">
          <label>Full Name</label>
          <input type="text" name="name" required>
          
          <label>Email</label>
          <input type="email" name="email" required>
          
          <label>Card Number</label>
          <input type="text" name="card_number" placeholder="xxxx xxxx xxxx xxxx" required>
          
          <label>Bank Name</label>
          <input type="text" name="bank_name" placeholder="e.g., Stanbic, Equity, etc." required>
          
          <label>Amount (UGX/USD)</label>
          <input type="number" name="amount" required>
          
          <button type="submit">Donate Now</button>
        </form>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> Christ Is Love Deliverance Church. All Rights Reserved.</p>
  </footer>
</body>
</html>
