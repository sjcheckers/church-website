<?php
include 'header.php'; // navbar + banner
?>

<!-- Contact Section -->
<section class="py-5" style="background-color:#f0f8ff;">
  <div class="container">
    <h2 class="text-center mb-4" style="color:#2c3e50;">Contact Us</h2>
    <p class="text-center mb-5" style="color:#333; max-width:900px; margin:auto; font-size:1.1rem;">
      We would love to hear from you! Please fill out the form below or reach us through our contact details.
    </p>

    <div class="row">
      <!-- Contact Info -->
      <div class="col-md-4 mb-4">
        <div style="padding:30px; border-radius:10px; background-color:#007bff; color:white; text-align:center;">
          <h5>Phone</h5>
          <p>+256 77 241 8276</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div style="padding:30px; border-radius:10px; background-color:#2c3e50; color:white; text-align:center;">
          <h5>Email</h5>
          <p>info@cldcchurch.org</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div style="padding:30px; border-radius:10px; background-color:#007bff; color:white; text-align:center;">
          <h5>Address</h5>
          <p>Nabugondo, Kasanda District, Uganda</p>
        </div>
      </div>
    </div>
    <?php if(isset($_GET['success'])): ?>
  <div class="alert alert-success text-center">Your message has been sent! Thank you.</div>
<?php elseif(isset($_GET['error'])): ?>
  <div class="alert alert-danger text-center">Please fill all fields and try again.</div>
<?php endif; ?>
    <!-- Contact Form -->
    <div class="row mt-4">
      <div class="col-md-8 mx-auto">
        <form action="send_message.php" method="POST" style="background:white; padding:30px; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.1);">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>

