<?php
session_start();
include("db.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE name = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($user = $result->fetch_assoc()) {
        $_SESSION['username'] = $user['name'];
        header("Location: index.php");
        exit();
    } else {
        $error = "❌ Incorrect username or password!";
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
            <h2>Login</h2>
            <form action="" method="POST">
                <div class="input_group">
                    <label for="user">User Name:</label>&nbsp;
                    <input type="text" id="user" name="user" required>
                </div>
                <br>
                <div class="input_group">
                    <label for="password">Password:</label>&nbsp;
                    <input type="text" id="password" name="password" required>
                </div>
                <br>
                <div class="button_group" id="login_button">
                    <button type="submit" name="login_button">Login</button>
                </div>
                <br><br>
                <a href="create.php" style="color:#103775;">Not have an Account? Create Now!</a>
                <p style="color:red;"><?php echo $error; ?></p>
            </form>
        </div>
    </div>
</body>
</html>
