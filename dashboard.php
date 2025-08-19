<?php
include("includes/db.php");
if(empty($_SESSION['login'])) {
    header("location:login.php");
}
include('includes/header.php');
?>
<div class="profile">
    <div class="heading">
        <h1>Welcome, <?php echo ucfirst($record['name']);?></h1>
        <p>Your email: <?php echo ucfirst($record['email']);?></p>
        <a href="includes/maincontroller.php?action=logout" class="btn btn-danger btn-sm">Logout</a>
    </div>
    <div class="info">
        <div class="second">
            <h2>Personal Details</h2>
            <form class="patient-form" action="includes/data_function.php" method="post">
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" id="fullName" class="form-control" value="<?php echo ucfirst($record['name']);?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" class="form-control" value="<?php echo ucfirst($record['email']);?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" id="age" class="form-control"
                        value="<?php echo isset($record['age']) ? $record['age'] : ''; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select id="gender" class="form-control" required>
                        <option value="">Select Gender</option>
                        <option value="Male"
                            <?php if(isset($record['gender']) && $record['gender'] == 'Male') echo 'selected'; ?>>Male
                        </option>
                        <option value="Female"
                            <?php if(isset($record['gender']) && $record['gender'] == 'Female') echo 'selected'; ?>>
                            Female</option>
                        <option value="Other"
                            <?php if(isset($record['gender']) && $record['gender'] == 'Other') echo 'selected'; ?>>Other
                        </option>
                    </select>
                </div>
                <div class="mb-3 border rounded p-3 bg-light">
                    <h4 class="mb-2">Address</h4>
                    <label for="address" class="form-label">Your Address</label>
                    <textarea id="address" name="address" class="form-control" rows="3"
                        placeholder="Enter your address"><?= htmlspecialchars($address) ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control"
                        value="<?= htmlspecialchars($phone) ?>" placeholder="Enter your phone number">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Save Profile</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="user-working-section" id="my-appointments">
    <h3>My Appointments</h3>
    <div class="appointments-list">
        <?php
                // This would typically fetch from database
                // For now showing placeholder
                ?>
        <p>No appointments scheduled yet.</p>
    </div>
</div>
<?php include('includes/footer.php'); ?>