<?php
// $success = urlencode($success);
session_start();

//after insert or update 
$_SESSION['update_password'] = "";
include_once 'dbconnect.php';
if (isset($_POST['submit'])) {
    $old_password = md5($_POST['oldpass']);
    $new_password = $_POST["newpass"];
    $retype_new_password = $_POST["confirmpass"];
    $chg_pwd = mysqli_query($con, "select * from admin where username='admin'");
    $chg_pwd1 = mysqli_fetch_array($chg_pwd);
    $data_pwd = $chg_pwd1['password'];
    if ($data_pwd == $old_password) {
        if ($new_password == $retype_new_password) {
            $enc_new_password = md5($new_password);
            $update_pwd = mysqli_query($con, "update admin set password='$enc_new_password' where username='admin'");
            echo "Update Sucessfully !!!";
        } else {
            echo "password does not match";
        }
    } else {
        echo "Your old password is wrong !!!";
    }
}

    // $old_password = md5($_POST['oldpass']);
    // $new_password = $_POST["newpass"];
    // $retype_new_password = $_POST["confirmpass"];

    // $sql_password = "select password from Admin";
    // $result = $con->query($sql_password);
    // if ($result->num_rows > 0) {
    //     if ($old_password == $result) {
    //         if ($new_password == $retype_new_password) {
    //             $encrypt_password = md5($new_password);
    //             $sql = "Update Admin Set password='$encrypt_password' where username='Admin'";
    //             if ($con->query($sql) === true) {
    //                 echo "<script>alert('Update Sucessfully');</script>";
    //                 header("Location: admin dashboard.php");
    //             } else {
    //                 echo "password can not be updated!";
    //             }
    //         } else {
    //             echo "old password and new password doesnot match";
    //         }
    //     } else {
    //         echo "your old password is wrong!";
    //         echo $result;
    //     }
    // } else {
    //     echo "cannot select from the table";
    // }
