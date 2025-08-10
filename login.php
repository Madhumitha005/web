<?php
session_start();
$conn = new mysqli("localhost", "root", "", "projectdb");

$username = $_POST['username'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = $row['id'];
    echo "Login successful.";
} else {
    echo "Invalid login.";
}
?>
