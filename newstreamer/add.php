<?php
$streamer = $_POST['username'];
$streamlink = $_POST['streamlink'];
include "../db.php";

$sql = "INSERT INTO streamerPeople (username, streamlink) VALUES ('%$streamer%', '%$streamlink%')";

if ($conn->query($sql) === TRUE) {
    echo "New Streamer added successfully!";
    #echo "<a href=newstreamer.php>Add Another Streamer</a>";
} else {
    echo "Error, contact Xol: " . $sql . "<br>" . $conn->error;
}

$conn->close();
sleep(10);
header("Location: newstreamer.php"); 
?>