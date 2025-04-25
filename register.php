<?php
include 'db.php';

$name     = $_POST['name'];
$email    = $_POST['email'];
$gender   = $_POST['gender'];
$mobile   = $_POST['mobile'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashed password

$sql = "INSERT INTO users (name, email, gender, mobile, password) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $name, $email, $gender, $mobile, $password);

if ($stmt->execute()) {
    echo "✅ Registration successful! <br><a href='index.html'>Go to Login</a>";
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
