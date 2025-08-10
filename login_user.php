
<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $civil = $_POST["civil"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM users WHERE name = ? AND civil_number = ?");
    $stmt->bind_param("ss", $username, $civil);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user["password"])) {
            $_SESSION["user_name"] = $user["name"];
            $_SESSION["civil_number"] = $user["civil_number"];
            $_SESSION["user_email"] = $user["email"];
            header("Location: main.html");
            exit();
        } else {
            echo "<p style='color:red;'>❌ Incorrect password.</p>";
        }
    } else {
        echo "<p style='color:red;'>❌ Incorrect username or civil ID.</p>";
    }
    $stmt->close();
}
?>
