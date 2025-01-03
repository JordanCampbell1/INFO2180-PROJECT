<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}


// Check if it's the user's first visit
if (!isset($_SESSION['admin_created'])) {
    // Include or require the PHP script that adds the admin user
    include('setup/createAdminUser.php');
    
    // Set a session flag so it doesn't run again
    $_SESSION['admin_created'] = true;
}

session_destroy(); //logout should deal with this appropriately
?>