<?php
session_start();
include("db.php");

// التحقق من تسجيل الدخول
if (!isset($_SESSION["user_email"])) {
    header("Location: login_user.php");
    exit();
}

// التحقق من إرسال البيانات
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST["phone"];
    $bank_account = $_POST["bank_account"];
    $income_statement = $_POST["income_statement"]; // رابط أو اسم الملف

    $email = $_SESSION["user_email"];

    $stmt = $conn->prepare("UPDATE users SET phone=?, bank_account=?, income_statement=? WHERE email=?");
    $stmt->bind_param("ssss", $phone, $bank_account, $income_statement, $email);

    if ($stmt->execute()) {
        echo "✅ Profile updated successfully. <a href='user_profile.php'>Go to Profile</a>";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Complete Your Profile</title>
</head>
<body>
    <h2>Complete Your Profile</h2>
    <form method="POST" action="complete_profile.php">
        <input type="text" name="phone" placeholder="Phone Number" required><br><br>
        <input type="text" name="bank_account" placeholder="Bank Account Number" required><br><br>
        <input type="text" name="income_statement" placeholder="Income Statement (file name or URL)" required><br><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
