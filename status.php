<?php
$conn = new mysqli("localhost", "root", "", "projectdb");
$user_id = $_GET['user_id']; // get from session ideally

$result = $conn->query("SELECT * FROM orders WHERE user_id='$user_id'");
while ($row = $result->fetch_assoc()) {
    echo "Product: " . $row['product_name'] . " - Status: " . $row['status'] . "<br>";
}
?>
