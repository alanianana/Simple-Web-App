<?php
$config = include __DIR__ . '/../config.php';
$servername = $config['host'];
$username = $config['username'];
$password = $config['password'];
$database = $config['database'];

$conn = new mysqli($servername, $username, $password);

$sql = "CREATE DATABASE $database";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
$conn = new mysqli($servername, $username, $password, $database);
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
surname VARCHAR(30) NOT NULL,
email VARCHAR(50),
admin int(6)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();