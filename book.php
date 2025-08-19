<?php 
  $page_title = "Doctor Details";
  include 'includes/header.php'; 
?>

<div class="doctor-section d-flex align-items-center">
  <div class="container py-5">
    <h2 class="text-center text-white mb-4">Book Your Appointment</h2>
    <div class="card doctor-card mx-auto">
      <div class="row g-0">
        <!-- This section can be made dynamic with PHP later -->
        <div class="col-md-4 text-center p-4 d-flex flex-column justify-content-center align-items-center border-end">
          <img src="images/derma.PNG" alt="Dr. Ananya Sharma" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
          <h5 class="card-title mb-1">Dr. Ananya Sharma</h5>
          <p class="text-muted">Dermatologist</p>
        </div>
        <div class="col-md-8">
          <div class="card-body p-4">
            <h4 class="card-subtitle mb-3">Professional Details</h4>
            <ul class="list-unstyled doctor-details-list">
              <li><i class="fa-solid fa-graduation-cap me-2"></i>MBBS, MD (Dermatology)</li>
              <li><i class="fa-solid fa-location-dot me-2"></i>123, Shashtri Nagar, Jaipur</li>
              <li><i class="fa-solid fa-phone me-2"></i>+91 12345 67890</li>
              <li><i class="fa-solid fa-clock me-2"></i>10:00 AM to 5:00 PM</li>
            </ul>
            <hr>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <h5 class="mb-0">Booking Fee: <span class="text-primary fw-bold">₹199</span></h5>
              <div class="actions">
                <a href="appointment.php?doctor=Dr. Ananya Sharma&specialty=Dermatologist&fee=199" class="btn btn-primary">Book Appointment</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>

