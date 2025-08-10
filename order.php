<?php

$host = "localhost";      
$username = "root";        
$password = "Madhu@2005";           
$dbname = "product";     


$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $conn->real_escape_string($_POST["name"]);
    $phonenumber = $conn->real_escape_string($_POST["phonenumber"]);
    $address = $conn->real_escape_string($_POST["address"]);

    
    $sql = "INSERT INTO products (name,phonenumber,address) VALUES ('$name', '$phonenumber','$address')";

    
    if ($conn->query($sql) === TRUE) {
        echo "order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
