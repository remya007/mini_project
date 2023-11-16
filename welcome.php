
<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['email'])) {
    header('Location: admindash.php');
    exit();
}

?>