<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="changePass.css">
</head>
<body>
    <div class="header">
    <h1> Dashboard</h1>
    </div>
    <div class="container">
        <div class="sidebar">
            <a href="dashboard.php">Dashboard</a>
            <a href="changePass.php">Change Password</a>
            <a href="changeInfo.php">Change Info</a>
            <a href="logout.php">Logout</a>
        </div>
        <div class="main-content">
            <h2>Change Password</h2>
            <form action="../controllers/changepassAction.php" method="post">
                <div class="form-group">
                    <label for="cpass">Current password</label>
                    <input type="password" name="cpass" id="cpass">
                </div>
                <div class="form-group">
                    <label for="npass">New password</label>
                    <input type="password" name="npass" id="npass">
                </div>
                <div class="form-group">
                    <label for="rpass">Retype password</label>
                    <input type="password" name="rpass" id="rpass">
                </div>
                <button type="submit">Change</button>
            </form>
        </div>
    </div>

</body>
</html>
