<?php
// live.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Live Sermons - Christ Is Love Deliverance Church</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { font-family: 'Segoe UI', sans-serif; background: #f8f9fa; }
    .container { max-width: 1000px; background: #fff; border-radius: 12px; margin-top: 30px; padding: 30px; box-shadow: 0 6px 16px rgba(0,0,0,0.1); }
    h1 { color: #4a148c; font-weight: 800; text-align: center; margin-bottom: 10px; }
    h5 { color: #4a148c; font-weight: 700; }
    iframe { width: 100%; height: 480px; border-radius: 12px; box-shadow: 0 6px 16px rgba(0,0,0,0.1); }
    .img-box img { width: 100%; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: 0.3s; }
    .img-box img:hover { transform: scale(1.03); }
    .btn-back { display: block; text-align: center; margin-top: 30px; }
  </style>
</head>
<body>

  <div class="container">
    <h1>🎥 Live Sermons & Crusades</h1>
    <p class="text-center text-muted">Watch our latest crusades and messages from Christ Is Love Deliverance Church</p>

    <!-- YouTube Live Crusade -->
    <div class="mt-4">
      <h5>End of Year Crusade — 31st December 2025</h5>
      <iframe src="https://www.youtube.com/embed/KW4z0V550vE?autoplay=0&rel=0" allowfullscreen></iframe>
      <p class="text-muted mt-2">Join us live for the End of Year Crusade filled with prayer, worship, and deliverance.</p>
    </div>

    <!-- Preaching Images -->
    <div class="row mt-5 g-4">
      <div class="col-md-6 img-box"><img src="preaching17.jpg" alt="Preaching 17"></div>
      <div class="col-md-6 img-box"><img src="preaching18.jpg" alt="Preaching 18"></div>
      <div class="col-md-6 img-box"><img src="preaching19.jpg" alt="Preaching 19"></div>
      <div class="col-md-6 img-box"><img src="preaching20.jpg" alt="Preaching 20"></div>
    </div>

    <a href="index.php" class="btn btn-outline-primary btn-back">← Back to Home</a>
  </div>

</body>
</html>
