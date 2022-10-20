<?php
// $success = urlencode($success);
session_start();

//after insert or update 
$_SESSION['github'] = "";
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $email = $_POST["github_email"];
    $github = $_POST["update_github"];
    $sql = "Update Developers_info Set GithubLink='$github' where EmailAddress='$email'";
    if ($con->query($sql) === true) {
        echo '<script>alert("Developer\'s github has been updated!")</script>';
        header("Location: Update-Links.php");
    }
}
