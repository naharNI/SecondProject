<?php
require_once "../models/functions.php";
session_start();
$isValid = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['email'];
    $password = $_POST['password'];
    
    $isValid = matchCredential($username, $password);
    
}
if (!$isValid) {
    header("Location: ../views/login.php?login=failed&username=$username");
} else {  
    $_SESSION['userEmail'] = $username;
    header("Location: ../views/dashboard.php");
}