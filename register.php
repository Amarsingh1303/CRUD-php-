<?php
include('connection.php');

$fn = $_POST['fname'];
$pw = $_POST['pass'];
$sql = "INSERT INTO customer (name,pass) VALUES ('$fn','$pw')";
if (mysqli_query($conn, $sql)) {
    echo "value inserted";
    header('location:insert.php');
} else {
    echo ("failed to insert" . mysqli_error($conn));
}
