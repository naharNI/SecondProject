<?php
session_start();
if(!isset($_SESSION['userEmail'])){
    header("Location: login.php");
    die();
}

include "../models/functions.php";
$email = $_SESSION['userEmail'];

$userinfo = getUser($email);

$name = $userinfo['name'];
$contact_number = $userinfo['contact_number'];
$gender = $userinfo['gender'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="header">
        <h1>Dashboard</h1>
    </div>
    <div class="container">
        <div class="sidebar">
            <a href="dashboard.php">Dashboard</a>
            <a href="changePass.php">Change Password</a>
            <a href="changeInfo.php">Change Info</a>
            <a href="logout.php">Logout</a>
        </div>
        <div class="main-content">
            <h2>Profile Information</h2>
            <p><strong>Name:</strong> <?php echo $name?></p>
            <p><strong>Email:</strong> <?php echo $email?></p>
            <p><strong>Contact Number:</strong> <?php echo $contact_number?></p>
            <p><strong>Gender:</strong> <?php echo $gender?></p>
        </div>
    </div>
   
</body>
</html>
