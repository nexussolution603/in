<?php
session_start();
include 'db.php';

$email = $_POST['email'];
$password_input = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if (password_verify($password_input, $user['password'])) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['name'];
        header("Location: dashboard.php"); // Redirect to website/dashboard
        exit();
    } else {
        echo "❌ Wrong password.";
    }
} else {
    echo "❌ Email not found.";
}

$stmt->close();
$conn->close();
?>
