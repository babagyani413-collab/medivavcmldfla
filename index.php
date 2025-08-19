<?php 
  // Set the page title for this page
  $page_title = "Home"; 
  // Include the header file
  include 'includes/header.php'; 
?>

<div class="hero-section">
    <div class="first">
        <div class="doctor">
            <picture>
                <img class="img-fluid" src="images/doctors.png" alt="Doctors illustration">
            </picture>
        </div>
    </div>
    <div class="second">
        <div class="slogans text-center">
            <div class="head-slogan">Book your health, on time</div>
            <div class="sub-slogan">
                <p>Easily find the Right Doctor <br> and book your appointment <br> without any hassle</p>
            </div>
        </div>
    </div>
    <div class="third">
        <div class="book-btn">
            <a href="doctors.php">Book Now</a>
        </div>
    </div>
</div>

<section class="features-section text-center">
    <h2 class="mt-0">Our Features</h2>
    <hr class="w-25 mx-auto mb-5" style="color: gray;">
    <div class="container">
        <div class="feature-card">
            <div class="icon">🩺</div>
            <h3>Verified Doctors</h3>
            <p>Only certified and experienced doctors across 20+ specialties.</p>
        </div>
        <div class="feature-card">
            <div class="icon">⚡</div>
            <h3>Instant Appointments</h3>
            <p>Book in-person or video consultations in under a minute.</p>
        </div>
        <div class="feature-card">
            <div class="icon">📱</div>
            <h3>Consult from Anywhere</h3>
            <p>Talk to doctors over secure video call, from home or on the go.</p>
        </div>
    </div>
</section>

<section id="how-it-works" class="text-center">
    <h2>HOW IT <br> WORKS</h2>
    <hr class="w-25 mx-auto mb-5" style="color: gray;">
    <div class="steps">
        <div class="step">
            <img src="https://img.icons8.com/ios-filled/50/search--v1.png" alt="Search Icon">
            <h3>Search</h3>
            <p>Find doctors by name, specialty or location.</p>
        </div>
        <div class="step">
            <img src="https://img.icons8.com/ios-filled/50/calendar.png" alt="Book Icon">
            <h3>Book</h3>
            <p>Choose a time slot and book your appointment instantly.</p>
        </div>
        <div class="step">
            <img src="https://img.icons8.com/ios-filled/50/ok--v1.png" alt="Confirm Icon">
            <h3>Confirm</h3>
            <p>Get confirmation & reminders right away.</p>
        </div>
    </div>
</section>

<section class="specialities-section pt-5">
    <div class="container common-title text-center fw-bold">
        <h2 class="mb-3">Our Specialists</h2>
        <hr class="w-25 mx-auto mb-5">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="card" style="width: 18rem;">
                        <img src="images/dentist.png" class="card-img-top" alt="Dentist">
                        <div class="card-body">
                            <h5 class="card-title mt-3">Dentist</h5>
                            <p class="card-text mt-3 mb-3">Treats teeth and gums with care.</p>
                            <a href="doctors.php?specialty=Dentist" class="btn btn-dark">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="card" style="width: 18rem;">
                        <img src="images/derma.PNG" class="card-img-top" alt="Dermatologist">
                        <div class="card-body">
                            <h5 class="card-title mt-3">Dermatologist</h5>
                            <p class="card-text mt-3">Cares for skin, hair, and nail problems.</p>
                            <a href="doctors.php?specialty=Dermatologist" class="btn btn-dark">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="card" style="width: 18rem;">
                        <img src="images/gyni.png" class="card-img-top" alt="Gynecologist">
                        <div class="card-body">
                            <h5 class="card-title mt-3">Gynecologist</h5>
                            <p class="card-text mt-3 mb-3">Specializes in women’s reproductive health.</p>
                            <a href="doctors.php?specialty=Gynecologist" class="btn btn-dark">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>