<?php
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $email = $_POST["email_skills"];
    $skills = $_POST["update_skills"];
    // $sql = "Update Developers_info Set LinkedInLink='$linkedin' where EmailAddress='$email'";
    $sql = "UPDATE developers_info set OtherSkills = CONCAT('$skills',',',`OtherSkills`) where EmailAddress='$email'";
    if ($con->query($sql) === true) {
        echo '<script>alert("Developer\'s linkedin link has been updated!")</script>';
        header("Location: Update-personal-info.php");
    }
}
