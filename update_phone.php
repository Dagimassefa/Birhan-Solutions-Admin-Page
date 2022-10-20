<?php
session_start();

//after insert or update 
$_SESSION['pstatus'] = "";
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $email = $_POST["phone_email"];
    $phone = $_POST["update_phone"];
    $sql = "Update Developers_info Set PhoneNumber='$phone' where EmailAddress='$email'";
    if ($con->query($sql) === true) {
        echo '<script>alert("Developer\'s phone number has been updated!")</script>';
        header("Location: Update-personal-info.php");
    }
}
