<?php
session_start();

// CSRF protection
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die('CSRF token mismatch');
}

// Check if user is logged in (for demo purposes, we'll use session)
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Validate required fields
$required_fields = ['patientName', 'patientPhone', 'patientEmail', 'patientAge', 'appointmentDate', 'appointmentTime', 'gender'];
foreach ($required_fields as $field) {
    if (empty($_POST[$field])) {
        $_SESSION['error'] = "Please fill in all required fields.";
        header('Location: appointment.php');
        exit();
    }
}

// Sanitize input data
$appointment_data = [
    'patient_name' => htmlspecialchars(trim($_POST['patientName'])),
    'patient_phone' => htmlspecialchars(trim($_POST['patientPhone'])),
    'patient_email' => filter_var(trim($_POST['patientEmail']), FILTER_SANITIZE_EMAIL),
    'patient_age' => intval($_POST['patientAge']),
    'appointment_date' => htmlspecialchars($_POST['appointmentDate']),
    'appointment_time' => htmlspecialchars($_POST['appointmentTime']),
    'gender' => htmlspecialchars($_POST['gender']),
    'symptoms' => htmlspecialchars(trim($_POST['symptoms'])),
    'medical_history' => htmlspecialchars(trim($_POST['medicalHistory'])),
    'doctor_name' => htmlspecialchars($_POST['doctorName']),
    'doctor_specialty' => htmlspecialchars($_POST['doctorSpecialty']),
    'consultation_fee' => intval($_POST['consultationFee']),
    'platform_fee' => 29,
    'total_fee' => intval($_POST['consultationFee']) + 29,
    'status' => 'Scheduled',
    'created_at' => date('Y-m-d H:i:s'),
    'user_id' => $_SESSION['user_id']
];

// Validate email
if (!filter_var($appointment_data['patient_email'], FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = "Please enter a valid email address.";
    header('Location: appointment.php');
    exit();
}

// Validate age
if ($appointment_data['patient_age'] < 1 || $appointment_data['patient_age'] > 120) {
    $_SESSION['error'] = "Please enter a valid age (1-120).";
    header('Location: appointment.php');
    exit();
}

// Validate appointment date (must be in the future)
$appointment_datetime = strtotime($appointment_data['appointment_date'] . ' ' . $appointment_data['appointment_time']);
if ($appointment_datetime <= time()) {
    $_SESSION['error'] = "Please select a future date and time for your appointment.";
    header('Location: appointment.php');
    exit();
}

// Generate appointment number
$appointment_data['appointment_number'] = 'APT' . date('Ymd') . rand(1000, 9999);

// In a real application, you would save this to a database
// For demo purposes, we'll save to session
if (!isset($_SESSION['appointments'])) {
    $_SESSION['appointments'] = [];
}

$_SESSION['appointments'][] = $appointment_data;

// Set success message
$_SESSION['success'] = "Appointment booked successfully! Your appointment number is: " . $appointment_data['appointment_number'];

// Redirect to user dashboard or confirmation page
header('Location: user.php');
exit();
?>