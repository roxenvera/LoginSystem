<?php
session_start();
include('db.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}


// $sql = "DELETE FROM `users` WHERE `username` =  {$_SESSION['username']} ";
// $conn->query($sql);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h3>
    <br>
    <a href="profile.php">Edit Profile</a> | <a href="logout.php">Logout</a>
</body>

</html>