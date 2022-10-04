<?php
$username = $_POST['username'];
$streamlink = $_POST['streamlink'];
include "db.php";

$sql = "INSERT INTO twitchStreamers (username, streamlink) VALUES (%$username%, %$streamlink%)";

if ($conn->query($sql) === TRUE) {
    echo "New Streamer added successfully!";
} else {
    echo "Error, contact Xol: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>