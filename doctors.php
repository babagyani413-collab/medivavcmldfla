<?php 
  $page_title = "Our Doctors";
  include 'includes/header.php'; 
?>

<div class="doctors-section">
  <div class="container py-5">
    <div class="text-center mb-5">
      <h1 class="display-4 fw-bold text-white">Our Expert Doctors</h1>
      <p class="lead text-white-50">Find the right specialist for your healthcare needs</p>
    </div>

    <!-- Filters -->
    <div class="row mb-4">
      <div class="col-md-6 mb-3">
        <select class="form-select" id="specialtyFilter">
          <option value="">All Specialties</option>
          <option value="General Physician">General Physician</option>
          <option value="Cardiologist">Cardiologist</option>
          <option value="Dermatologist">Dermatologist</option>
          <option value="Gynecologist">Gynecologist</option>
          <option value="Pediatrician">Pediatrician</option>
          <option value="Neurologist">Neurologist</option>
        </select>
      </div>
      <div class="col-md-6 mb-3">
        <select class="form-select" id="sortFilter">
          <option value="name">Sort by Name</option>
          <option value="rating">Sort by Rating</option>
          <option value="experience">Sort by Experience</option>
          <option value="fee">Sort by Fee (Low to High)</option>
        </select>
      </div>
    </div>

    <!-- Doctors Grid -->
    <div class="row" id="doctorsGrid">
      <!-- Doctors will be loaded here by JavaScript (doctors.js) -->
      <p class="text-center text-white" id="loadingMessage">Loading doctors...</p>
    </div>
  </div>
</div>


<?php include('includes/footer.php'); ?>

