<?php
include 'connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM customer WHERE id=$id";

mysqli_query($conn, $sql);
header('location:operate.php');
