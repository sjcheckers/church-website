<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Christ Is Love Deliverance Church (CLDC Uganda)</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    :root {
      --brand: #4a148c;
      --brand-2: #6a1b9a;
      --light: #faf9fd;
    }
    body {
      font-family: "Segoe UI", Tahoma, sans-serif;
      background: var(--light);
      color: #333;
      overflow-x: hidden;
      scroll-behavior: smooth;
    }
    /* Top buttons */
    .top-buttons {
      background: linear-gradient(90deg, var(--brand), var(--brand-2));
      padding: 10px 0;
      text-align: center;
    }
    .top-buttons a {
      color: #fff;
      background: rgba(255,255,255,0.15);
      border: none;
      border-radius: 8px;
      padding: 8px 16px;
      margin: 5px;
      display: inline-block;
      font-weight: 600;
      text-decoration: none;
      transition: 0.3s;
    }
    .top-buttons a:hover {
      background: #fff;
      color: var(--brand);
    }

    /* Sections */
    section {
      padding: 60px 15px;
      background: #fff;
      margin: 15px auto;
      border-radius: 12px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.08);
      max-width: 900px;
    }
    section h2 {
      text-align: center;
      color: var(--brand);
      font-weight: 800;
      margin-bottom: 15px;
    }
    .hero {
      background: url('banner.jpg') center/cover no-repeat;
      color: #fff;
      text-align: center;
      padding: 100px 20px;
      border-radius: 0;
    }
    .hero::after {
      content: "";
      display: block;
      background: rgba(0,0,0,0.5);
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      z-index: 0;
    }
    .hero-content {
      position: relative;
      z-index: 1;
    }
    .hero h1 { font-size: 2rem; font-weight: 800; }
    .hero p { font-size: 1.1rem; }

    /* Gallery */
    .gallery img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    /* Footer */
    footer {
      background: linear-gradient(90deg, var(--brand), var(--brand-2));
      color: #fff;
      text-align: center;
      padding: 15px 10px;
      border-radius: 12px;
      margin-top: 20px;
    }

    @media(max-width: 576px){
      section { padding: 40px 10px; }
      .hero h1 { font-size: 1.5rem; }
    }
  </style>
</head>
<body>

<!-- Top 3 Buttons -->
<div class="top-buttons">
  <a href="#home">Home</a>
  <a href="#about">About Us</a>
  <a href="#contact">Contact</a>
</div>

<!-- Home -->
<section id="home" class="hero">
  <div class="hero-content">
    <h1>Welcome to Christ Is Love Deliverance Church</h1>
    <p>“He who does not love does not know God, for God is love.” — 1 John 4:8</p>
  </div>
</section>

<!-- About Us -->
<section id="about">
  <h2>About Us</h2>
  <p>Christ Is Love Deliverance Church (CLDC) is a spiritual home where believers gather to worship, grow, and serve. Our mission is to transform lives through love, deliverance, and the Word of God. We are located in Kalamba, Kiganda, Kassanda — Central Uganda.</p>
</section>

<!-- Vision -->
<section id="vision">
  <h2>Our Vision</h2>
  <p>To build a Christ-centered community full of love and righteousness that impacts Uganda and the world through the gospel.</p>
</section>

<!-- Mission -->
<section id="mission">
  <h2>Our Mission</h2>
  <p>To spread the message of Jesus Christ, deliver souls from bondage, and empower believers to live in holiness, unity, and love.</p>
</section>

<!-- Ministries -->
<section id="ministries">
  <h2>Our Ministries</h2>
  <ul>
    <li>Children & Youth Ministry</li>
    <li>Women of Faith Fellowship</li>
    <li>Men of Honor Ministry</li>
    <li>Worship & Choir Team</li>
    <li>Community Outreach & Evangelism</li>
  </ul>
</section>

<!-- Needs -->
<section id="needs">
  <h2>Our Needs</h2>
  <p>We are currently raising support for the following:</p>
  <ul>
    <li>Church building construction</li>
    <li>Musical instruments and sound system</li>
    <li>Support for outreach missions</li>
    <li>Printing Bibles and Christian materials</li>
  </ul>
</section>

<!-- Gallery -->
<section id="gallery" class="gallery">
  <h2>Gallery</h2>
  <div class="row g-3">
    <div class="col-6 col-md-4"><img src="gallery1.jpg" alt="Gallery 1"></div>
    <div class="col-6 col-md-4"><img src="gallery2.jpg" alt="Gallery 2"></div>
    <div class="col-6 col-md-4"><img src="gallery3.jpg" alt="Gallery 3"></div>
  </div>
</section>

<!-- Contact -->
<section id="contact">
  <h2>Contact Us</h2>
  <p>For prayers, fellowship, or support, reach out through:</p>
  <p><strong>Phone:</strong> +256 700 000000<br>
     <strong>Email:</strong> info@cldcuganda.org<br>
     <strong>Location:</strong> Kalamba, Kiganda, Kassanda, Central Uganda</p>
  <div class="mt-3">
    <a href="https://chat.whatsapp.com/KwVxpXd1RUC2KAAVFmCepI" target="_blank" class="btn btn-success">Join Our WhatsApp Group</a>
  </div>
</section>

<!-- Footer -->
<footer>
  <p>&copy; <?php echo date("Y"); ?> Christ Is Love Deliverance Church - All Rights Reserved</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
