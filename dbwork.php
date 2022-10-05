<?php
include "src/db.php";

$sql = "CREATE TABLE streamerPeople (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    streamlink VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table streamerPeople created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>