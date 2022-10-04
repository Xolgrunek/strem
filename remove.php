<?php
$search = $_POST['username'];
require "db.php";

$sql = "DELETE FROM twitchStreamers WHERE username like '%$search%'";

if ($conn->query($sql) == TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error Deleting record: " .$conn->error;
}
$conn->close();
?>