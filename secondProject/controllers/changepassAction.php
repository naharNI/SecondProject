<?php
include "../models/functions.php";
session_start();
    $currentPassword = $_POST['cpass'];
    $newPassword = $_POST['npass'];
    $retypePassword = $_POST['rpass'];
    if ($newPassword !== $retypePassword) {
        echo "New password and Retype password do not match.";
        exit;
    }
    $email = $_SESSION['userEmail'];
    
    $userinfo = getUser($email);
    
    $name = $userinfo['name'];
    $contact_number = $userinfo['contact_number'];
    $gender = $userinfo['gender'];
    updateDatabase($newPassword,$name,$contact_number,$gender,$email);
    header("Location: ../views/dashboard.php")
?>