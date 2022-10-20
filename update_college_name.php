<?php
// $success = urlencode($success);
session_start();

//after insert or update 
$_SESSION['college'] = "";
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $email = $_POST["college_email"];
    $college_name = $_POST["update_college_name"];
    $sql = "Update Developers_info Set CollegeName='$college_name' where EmailAddress='$email'";
    if ($con->query($sql) === true) {
        echo '<script>alert("Developer\'s college name has been updated!")</script>';
        header("Location: Update-Educational-Info.php");
    }
}
