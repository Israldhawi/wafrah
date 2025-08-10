<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $civilId     = trim($_POST["civilId"]);
    $fname       = trim($_POST["fname"]);
    $lname       = trim($_POST["lname"]);
    $username    = trim($_POST["user"]);
    $password    = trim($_POST["password"]); // NOT hashed
    $phoneNumber = trim($_POST["phoneNumber"]);
    $email       = trim($_POST["email"]);
    $gender      = isset($_POST["gender"]) ? $_POST["gender"] : "";



    try {
        $stmt = $conn->prepare("INSERT INTO users (name, civil_number, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $civilId, $email, $password);
        $stmt->execute();
        header("Location: login.php");
        exit();
    } catch (mysqli_sql_exception $e) {
        echo "<div style='text-align:center; color:red;'>❌ Error: " . $e->getMessage() . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="create.css">
</head>
<body>
    <div class="login_form_container">
        <div class="login_form">
            <h2>Create Account</h2>
            <form method="POST" action="">
                <div class="input_group">
                    <label for="civilId">Civil Id:</label>
                    <input type="number" id="civilId" name="civilId" required>
                </div>
                <br>
                <div class="input_group">
                    <label for="fname">First Name:</label>
                    <input type="text" id="fname" name="fname" required>
                </div>
                <br>
                <div class="input_group">
                    <label for="lname">Last Name:</label>
                    <input type="text" id="lname" name="lname" required>
                </div>
                <br>
                <div class="input_group">
                    <label for="user">User Name:</label>
                    <input type="text" id="user" name="user" required>
                </div>
                <br>
                <div class="input_group">
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" required>
                </div>
                <br>
                <div class="input_group">
                    <label for="phoneNumber">Phone Number:</label>
                    <input type="number" id="phoneNumber" name="phoneNumber" required>
                </div>
                <br>
                <div class="input_group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <br>
                <div class="input_group">
                    <label>Gender:</label>
                    <input type="radio" id="male" name="gender" value="male" required> Male
                    <input type="radio" id="female" name="gender" value="female"> Female
                </div>
                <br>
                <div class="button_group" id="login_button">
                    <button type="submit" name="register">Create</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
