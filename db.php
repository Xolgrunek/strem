<?php
$servername = getenv("MYSQL_SERVER");
$username = getenv("MYSQL_USER");
$password = getenv('MYSQL_PASSWD');
$dbname = getenv('MYSQL_DB');

// Initializing the Connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Checking if connection works
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>