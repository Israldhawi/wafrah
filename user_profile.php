<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("Location: login_user.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION["user_name"]; ?>!</h2>
    <p>Your email: <?php echo $_SESSION["user_email"]; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
