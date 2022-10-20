<?php
session_start();

//after insert or update 
$_SESSION['lstatus'] = "";
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $email = $_POST["lname_email"];
    $lname = $_POST["update_lname"];
    $sql = "Update Developers_info Set LastName='$lname' where EmailAddress='$email'";
    if ($con->query($sql) === true) {
        echo '<script>alert("Developer\'s Lastname has been updated!")</script>';
        header("Location: Update-personal-info.php");
    }
}
