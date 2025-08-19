<?php
// Generate CSRF token if not exists
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Set default page title if not provided
if (!isset($page_title)) {
    $page_title = "MediSlot - Book Your Health Appointment";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Healthcare System'; ?></title>
    
    <?php
    // Auto-load CSS based on current page
    $current_page = basename($_SERVER['PHP_SELF'], '.php');
    $css_file = $current_page . '.css';
    if (file_exists($css_file)) {
        echo "<link rel='stylesheet' href='$css_file'>";
    }
    ?>
    
    <style>