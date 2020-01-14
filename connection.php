<?php
$conn = mysqli_connect("localhost", "root", "", "cruddb");
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
