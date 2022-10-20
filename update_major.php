<?php
// $success = urlencode($success);
session_start();

//after insert or update 
$_SESSION['major'] = "";
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $email = $_POST["major_email"];
    $major = $_POST["update_major"];
    $sql = "Update Developers_info Set Major='$major' where EmailAddress='$email'";
    if ($con->query($sql) === true) {
        echo '<script>alert("Developer\'s major has been updated!")</script>';
        header("Location: Update-Educational-Info.php");
    }
}
