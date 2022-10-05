<?php
$password = $_POST['password'];
$hash = 'a';

if (password_verify($password, $hash)){

    include "db.php";
    $search = $_POST['username'];

    $sql = "DELETE FROM twitchStreamers WHERE username like '%$search%'";

    if ($conn->query($sql) == TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error Deleting record: " .$conn->error;
    }
    $conn->close();
} else {
    echo 'Invalid Password!';
}
?>