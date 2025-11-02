<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Christ Is Love Deliverance Church - CLDC Uganda</title>
  <meta name="description" content="Welcome to Christ Is Love Deliverance Church. Join us for worship, prayer, and community outreach in Uganda.">
  <meta name="keywords" content="CLDC, Christ Is Love Church, Uganda church, deliverance ministry, worship, prayer">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    :root {
      --brand: #4a148c;
      --brand-2: #6a1b9a;
      --accent: #16a085;
      --light: #f7f7fb;
      --text: #333;
    }
    body {
      background: var(--light);
      color: var(--text);
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.75;
    }
    a { text-decoration: none; }
    a:hover { text-decoration: none; }

    .topbar {
      background: linear-gradient(90deg, var(--brand), var(--brand-2));
      color: #fff;
      padding: .65rem 0;
    }
    .brand-title {
      font-weight: 700;
      letter-spacing: .3px;
    }
    .brand-logo {
      height: 48px; width: auto;
    }

    .navbar-custom {
      background: #fff;
      box-shadow: 0 4px 12px rgba(0,0,0,.08);
      padding: .75rem 0;
      margin-bottom: 1rem;
    }
    .navbar-custom a {
      color: var(--brand);
      font-weight: 600;
    }
    .navbar-custom a:hover {
      color: var(--brand-2);
    }

    .hero {
      position: relative;
      min-height: 85vh;
      border-radius: 16px;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
      margin-bottom: 2rem;
      background: url('banner.jpg') center/cover no-repeat;
      box-shadow: 0 10px 24px rgba(0,0,0,.15);
    }
    .hero::after {
      content: "";
      position: absolute; inset: 0;
      background: linear-gradient(180deg, rgba(0,0,0,.45), rgba(0,0,0,.55));
    }
    .hero > .inner {
      position: relative; z-index: 2;
      padding: 2rem;
    }
    .hero h1 {
      font-size: clamp(2rem, 4vw, 3.25rem);
      font-weight: 800;
      text-shadow: 0 3px 8px rgba(0,0,0,.45);
    }
    .hero p {
      font-size: 1.15rem;
      opacity: .95;
    }

    section.section {
      background: #fff;
      border-radius: 16px;
      padding: 2rem 1.5rem;
      margin-bottom: 1.25rem;
      box-shadow: 0 6px 18px rgba(0,0,0,.06);
    }
    .section h2 {
      color: var(--brand);
      font-weight: 800;
      letter-spacing: .2px;
      margin-bottom: 1rem;
    }
    .section h4 {
      color: #5a2d91;
      font-weight: 700;
      margin-top: 1.5rem;
    }

    .min-card {
      background: #fff;
      border: 1px solid #eee;
      border-radius: 14px;
      overflow: hidden;
      height: 100%;
      transition: transform .2s ease, box-shadow .2s ease;
    }
    .min-card:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(0,0,0,.08);
    }
    .min-card img {
      width: 100%; height: 180px; object-fit: cover;
    }
    .min-card .p-3 h5 {
      color: #4a148c; font-weight: 700;
    }

    .gal-img {
      width: 100%; height: 210px; object-fit: cover;
      border-radius: 12px;
      transition: transform .25s ease;
    }
    .gal-img:hover { transform: scale(1.03); }

    .contact-icons img {
      width: 32px;
      margin-right: .5rem;
    }

    footer {
      background: linear-gradient(90deg, var(--brand), var(--brand-2));
      color: #fff;
      border-radius: 14px;
      padding: 1rem 0;
      margin-top: 1rem;
    }
  </style>
</head>
<body>

<div class="topbar">
  <div class="container d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center gap-2">
      <img src="logo.png" alt="Logo" class="brand-logo img-fluid"/>
      <div class="brand-title">Christ Is Love Deliverance Church</div>
    </div>
    <div class="small">Kalamba, Kiganda, Kassanda • Central Uganda</div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon">&#9776;</span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav mx-auto gap-3">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="#vision">Vision</a></li>
        <li class="nav-item"><a class="nav-link" href="#mission">Mission</a></li>
        <li class="nav-item"><a class="nav-link" href="#ministries">Ministries</a></li>
        <li class="nav-item"><a class="nav-link" href="#needs">Needs</a></li>
        <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container page-wrap">

  <!-- Hero -->
  <section id="home" class="hero mb-4">
    <div class="inner text-center">
      <h1>“He who does not love does not know God, for God is love..” 1 John.4.8 </h1>
      <p class="mt-2">Sharing God’s Love • Worship • Discipleship • Outreach</p>
      <a href="#about" class="btn btn-light btn-lg mt-3">Learn About Us</a>
    </div>
  </section>

  <!-- About, Vision, Mission, Ministries, Needs, Gallery, Contact -->
  <!-- [Use the same structure as before — all image paths should be updated with class="img-fluid"] -->

  <!-- Contact Section (continued) -->
  <section id="contact" class="section">
    <h2>Contact Us</h2>
    <p>We remain committed to being a lighthouse of love, hope, and truth in Central Uganda and beyond.</p>
    <h4>Connect with Us</h4>
    <div class="d-flex gap-3 mt-2 contact-icons">
      <a href="#"><img src="twitter.png" class="img-fluid" alt="Twitter"></a>
      <a href="#"><img src="facebook.png" class="img-fluid" alt="Facebook"></a>
      <a href="#"><img src="youtube.png" class="img-fluid" alt="YouTube"></a>
      <a href="#"><img src="linkedin.png" class="img-fluid" alt="LinkedIn"></a>
      <a href="https://chat.whatsapp.com/KwVxpXd1RUC2KAAVFmCepI?mode=ac_t" target="_blank">
        <img src="whatsapp.png" class="img-fluid" alt="WhatsApp">
      </a>
    </div>

    <h4 class="mt
  </section>
</div>

<!-- Footer -->
<footer class="text-center">
  <div class="container">
    <p class="mb-1">&copy; <?php echo date("Y"); ?> Christ Is Love Deliverance Church • All Rights Reserved</p>
    <p class="small mb-0">
      Church License &copy; 2025 • License No: CLD-UG-2025-001<br>
      All activities authorized under Uganda Religious Bodies Regulation
    </p>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
