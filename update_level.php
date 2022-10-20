<?php
// $success = urlencode($success);
session_start();

//after insert or update 
$_SESSION['level'] = "";
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $email = $_POST["level_email"];
    $level = $_POST["update_level"];
    $sql = "Update Developers_info Set edu_level='$level' where EmailAddress='$email'";
    if ($con->query($sql) === true) {
        echo '<script>alert("Developer\'s level has been updated!")</script>';
        header("Location: Update-Educational-Info.php");
    }
}
