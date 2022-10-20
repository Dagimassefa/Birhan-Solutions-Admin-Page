<?php
// session_start();
// $success = "<div class='success'>First Name Successfully!</div>"; 
// use the $success
//encode the URL parameter as : 

// $success = urlencode($success);
session_start();

//after insert or update 
$_SESSION['status'] = "";
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $email = $_POST["fname_email"];
    $fname = $_POST["update_fname"];
    $sql = "Update Developers_info Set FirstName='$fname' where EmailAddress='$email'";
    if ($con->query($sql) === true) {
        echo '<script>alert("Developer\'s Firstname has been updated!")</script>';
        header("Location: Update-personal-info.php");
    }
}
