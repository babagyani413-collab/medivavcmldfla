@@ .. @@
 <?php
+// Generate CSRF token if not exists
+if (empty($_SESSION['csrf_token'])) {
+    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
+}
+
 // Set default page title if not provided
 if (!isset($page_title)) {
     $page_title = "MediSlot - Book Your Health Appointment";
 }
 ?>