<?php
include 'db.php';
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.html");
    exit();
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<h2>Registered Users</h2>";
echo "<table border='1' cellpadding='10'>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Mobile</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['gender']}</td>
        <td>{$row['mobile']}</td>
    </tr>";
}
echo "</table>";

$conn->close();
?>
