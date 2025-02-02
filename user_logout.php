<?php
// Start session and destroy it
session_start();
session_unset();
session_destroy();

// Redirect to login page
header("Location: user_login.html");
exit;
?>
