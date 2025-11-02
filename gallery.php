<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gallery - Christ is Love Deliverance Church</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #f8f9fa; }
    .gallery-img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0px 3px 6px rgba(0,0,0,0.2);
      transition: transform 0.3s ease;
    }
    .gallery-img:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">Christ is Love Deliverance Church</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="ministries.php">Ministries</a></li>
          <li class="nav-item"><a class="nav-link active" href="gallery.php">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <li class="nav-item">
  <a class="nav-link" href="gallery.php">Gallery</a>
</li>
 </ul>
      </div>
    </div>
  </nav>

  <!-- Gallery -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Church Gallery</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <img src="assets/images/preaching1.jpg" class="gallery-img" alt="Preaching 1">
      </div>
      <div class="col-md-4">
        <img src="assets/images/preaching2.jpg" class="gallery-img" alt="Preaching 2">
      </div>
      <div class="col-md-4">
        <img src="assets/images/preaching3.jpg" class="gallery-img" alt="Preaching 3">
      </div>
      <div class="col-md-4">
        <img src="assets/images/preaching4.jpg" class="gallery-img" alt="Preaching 4">
      </div>
      <div class="col-md-4">
        <img src="assets/images/preaching5.jpg" class="gallery-img" alt="Preaching 5">
      </div>
      <div class="col-md-4">
        <img src="assets/images/preaching6.jpg" class="gallery-img" alt="Preaching 6">
      </div>
    </div>
  </div>

  <footer class="bg-dark text-light text-center py-3">
    <p class="mb-0">&copy; 2025 Christ is Love Deliverance Church. All Rights Reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

