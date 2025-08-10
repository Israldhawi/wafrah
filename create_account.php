<?php
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 40px;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            margin: auto;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        .message {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Create Account</h2>

<form method="POST" action="">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="text" name="civil" placeholder="Civil Number" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="submit">Create Account</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $name = trim($_POST["name"]);
    $civil = trim($_POST["civil"]);
    $email = trim($_POST["email"]);
    $password = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT);

    try {
        $stmt = $conn->prepare("INSERT INTO users (name, civil_number, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $civil, $email, $password);
        $stmt->execute();

        echo "<div class='message' style='color:green;'>✅ Account created successfully!</div>";
    } catch (mysqli_sql_exception $e) {
        echo "<div class='message' style='color:red;'>❌ Error: " . $e->getMessage() . "</div>";
    }
}
?>

</body>
</html>
