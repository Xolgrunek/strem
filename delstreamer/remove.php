<?php
$password = $_POST['password'];
$hash = '$2y$10$rs83dioXp4trdh/xRjS2reAsBP2dw.x/8aGvT/LvhLkn5PM1puzQi';

if (password_verify($password, $hash)){

    include "../src/db.php";
    $search = $_POST['username'];

    $sql = "DELETE FROM streamerPeople WHERE username like '%$search%'";

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