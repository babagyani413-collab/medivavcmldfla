<?php 
  $page_title = "Book Appointment";
  include 'includes/header.php'; 
?>

<div class="appointment-section">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="appointment-card">
          <div class="card-header text-center">
            <h2 class="mb-0">Book Your Appointment</h2>
            <p class="text-white-50 mt-2">Fill in the details below to schedule your consultation</p>
          </div>
          
          <div class="card-body">
            <!-- Doctor Info Section -->
            <div class="doctor-info-section mb-4" id="doctorInfo">
              <!-- Doctor info will be loaded here by JavaScript (appointment.js) -->
              <p class="text-center">Loading doctor details...</p>
            </div>

            <!-- Appointment Form -->
            <form id="appointmentForm" class="appointment-form" method="post" action="process_appointment.php">
              <input type="hidden" name="csrf_token" value="<?php echo isset($_SESSION['csrf_token']) ? htmlspecialchars($_SESSION['csrf_token']) : ''; ?>">
              <!-- Hidden fields to pass doctor info -->
              <input type="hidden" id="doctorName" name="doctorName">
              <input type="hidden" id="doctorSpecialty" name="doctorSpecialty">
              <input type="hidden" id="consultationFeeInput" name="consultationFee">

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="patientName" class="form-label">Full Name *</label>
                  <input type="text" class="form-control" id="patientName" name="patientName" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="patientPhone" class="form-label">Phone Number *</label>
                  <input type="tel" class="form-control" id="patientPhone" name="patientPhone" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="patientEmail" class="form-label">Email Address *</label>
                  <input type="email" class="form-control" id="patientEmail" name="patientEmail" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="patientAge" class="form-label">Age *</label>
                  <input type="number" class="form-control" id="patientAge" name="patientAge" min="1" max="120" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="appointmentDate" class="form-label">Preferred Date *</label>
                  <input type="date" class="form-control" id="appointmentDate" name="appointmentDate" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="appointmentTime" class="form-label">Preferred Time *</label>
                  <select class="form-select" id="appointmentTime" name="appointmentTime" required>
                    <option value="">Select Time</option>
                    <option value="09:00">09:00 AM</option>
                    <option value="10:00">10:00 AM</option>
                    <option value="11:00">11:00 AM</option>
                    <option value="14:00">02:00 PM</option>
                    <option value="15:00">03:00 PM</option>
                  </select>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Gender *</label>
                <div class="form-check-container">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male" required>
                    <label class="form-check-label" for="genderMale">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female" required>
                    <label class="form-check-label" for="genderFemale">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderOther" value="Other" required>
                    <label class="form-check-label" for="genderOther">Other</label>
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="symptoms" class="form-label">Symptoms / Reason for Visit</label>
                <textarea class="form-control" id="symptoms" name="symptoms" rows="3" placeholder="Please describe your symptoms..."></textarea>
              </div>

              <div class="fee-summary mb-4">
                <div class="d-flex justify-content-between">
                  <span>Consultation Fee:</span>
                  <span id="consultationFeeText">₹0</span>
                </div>
                <div class="d-flex justify-content-between">
                  <span>Platform Fee:</span>
                  <span>₹29</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between fw-bold">
                  <span>Total Amount:</span>
                  <span id="totalFeeText">₹29</span>
                </div>
              </div>

              <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" id="termsCheck" required>
                <label class="form-check-label" for="termsCheck">
                  I agree to the <a href="#" class="text-primary">Terms and Conditions</a>.
                </label>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">
                  <i class="fa-solid fa-calendar-check me-2"></i> Book Appointment
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>

