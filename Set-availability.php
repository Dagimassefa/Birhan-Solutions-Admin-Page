<?php
// $success = urlencode($success);
session_start();

//after insert or update 
$_SESSION['set_availablity'] = "";
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $email = $_POST["email_av"];
    $availability = $_POST["avialable"];
    $sql = "insert into Employees_availability_days(EmailAddress,available_days) values('$email','$availability')";
    if ($con->query($sql) === true) {
        header("Location: admin dashboard.php");
    }
}
