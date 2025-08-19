<?php 
  $page_title = "User Profile";
  include 'includes/header.php'; 
?>

<div class="profile">
  <div class="heading text-center">
    <h1>Welcome to Your Profile</h1>
    <p>Manage your appointments and personal information</p>
  </div>

  <div class="info">
    <div class="first">
      <div class="sub-profile-container">
        <div class="image">
          <img src="https://via.placeholder.com/120x120?text=User" alt="Profile Picture" class="profile-pic" id="profilePreview">
        </div>
        <input type="file" id="profilePicInput" accept="image/*" class="btn btn-sm">
      </div>
    </div>

    <div class="second">
      <h2>Personal Details</h2>
      <form class="patient-form" id="profileForm">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" id="fullName" name="fullName" class="form-control" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" name="email" class="form-control" required>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="contact" class="form-label">Phone Number</label>
            <input type="tel" id="contact" name="contact" class="form-control">
          </div>
          <div class="col-md-6 mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" id="age" name="age" class="form-control" min="1" max="120">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Gender</label>
          <div class="form-check-container">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male">
              <label class="form-check-label" for="genderMale">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female">
              <label class="form-check-label" for="genderFemale">Female</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="genderOther" value="Other">
              <label class="form-check-label" for="genderOther">Other</label>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <textarea id="address" name="address" class="form-control" rows="3" placeholder="Enter your address"></textarea>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="weight" class="form-label">Weight (kg)</label>
            <input type="number" id="weight" name="weight" class="form-control" min="1" max="500">
          </div>
          <div class="col-md-6 mb-3">
            <label for="height" class="form-label">Height (cm)</label>
            <input type="number" id="height" name="height" class="form-control" min="50" max="300">
          </div>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Save Profile</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Bio Section -->
  <div class="bio-section">
    <h2>About Me</h2>
    <textarea id="userBio" placeholder="Tell us about yourself..." rows="4" class="form-control"></textarea>
  </div>
</div>

<!-- Appointments Section -->
<div class="user-working-section" id="my-appointments">
  <h3>My Appointments</h3>
  <div class="appointments-list">
    <p>Loading appointments...</p>
  </div>
</div>

<script src="user-profile.js"></script>
<script src="auth.js"></script>

<?php include('includes/footer.php'); ?>