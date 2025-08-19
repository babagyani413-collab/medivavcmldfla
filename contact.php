<?php 
  $page_title = "Contact Us";
  include 'includes/header.php'; 
?>

<div class="contact-section">
  <div class="container py-5">
    <div class="text-center mb-5">
      <h1 class="display-4 fw-bold text-white">Get in Touch</h1>
      <p class="lead text-white-50">We're here to help with any questions</p>
    </div>

    <div class="row">
      <!-- Contact Information -->
      <div class="col-lg-4 mb-4">
        <div class="contact-info-card">
          <h3 class="mb-4">Contact Information</h3>
          <div class="contact-item">
            <div class="contact-icon"><i class="fa-solid fa-phone"></i></div>
            <div class="contact-details">
              <h5>Phone</h5>
              <p><a href="tel:+919216868787">+91 9216868787</a></p>
              <p><a href="tel:+918824750355">+91 8824750355</a></p>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
            <div class="contact-details">
              <h5>Email</h5>
              <p><a href="mailto:info@medislot.com">info@medislot.com</a></p>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
            <div class="contact-details">
              <h5>Address</h5>
              <p>123 Medical Center, Jaipur, Rajasthan</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-8">
        <div class="contact-form-card">
          <h3 class="mb-4">Send us a Message</h3>
          <form id="contactForm" action="process_contact.php" method="post">
            <input type="hidden" name="csrf_token" value="<?php echo isset($_SESSION['csrf_token']) ? htmlspecialchars($_SESSION['csrf_token']) : ''; ?>">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName" class="form-label">First Name *</label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName" class="form-label">Last Name *</label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address *</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label">Subject *</label>
              <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message *</label>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg">
                <i class="fa-solid fa-paper-plane me-2"></i> Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- FAQ Section -->
    <div class="faq-section mt-5" id="faq">
        <div class="text-center mb-5">
          <h2 class="text-white">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="accordion" id="faqAccordion">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    How do I book an appointment?
                  </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    You can book an appointment by browsing our doctors, selecting your preferred specialist, and choosing an available time slot.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    Can I cancel or reschedule my appointment?
                  </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Yes, you can cancel or reschedule your appointment up to 2 hours before the scheduled time through your user profile.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    What payment methods do you accept?
                  </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    We accept all major credit cards, debit cards, UPI payments, and net banking. 
                    Payment is processed securely through our platform.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                    Are the doctors verified?
                  </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Yes, all doctors on our platform are verified professionals with valid medical licenses 
                    and credentials. We ensure quality healthcare services.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                    Do you offer video consultations?
                  </button>
                </h2>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Yes, we offer both in-person and video consultation options. You can choose your 
                    preferred consultation type when booking an appointment.
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
  </div>
</div>


<?php include('includes/footer.php'); ?>

