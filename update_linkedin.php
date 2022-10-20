<?php
// $success = urlencode($success);
session_start();

//after insert or update 
$_SESSION['linkedin'] = "";
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $email = $_POST["linkedin_email"];
    $linkedin = $_POST["update_linkedin"];
    $sql = "Update Developers_info Set LinkedInLink='$linkedin' where EmailAddress='$email'";
    if ($con->query($sql) === true) {
        echo '<script>alert("Developer\'s linkedin link has been updated!")</script>';
        header("Location: Update-Links.php");
    }
}
