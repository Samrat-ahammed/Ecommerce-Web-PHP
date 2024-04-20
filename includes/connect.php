<?php 
$conn = mysqli_connect("localhost", "root", "password", "My_store");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>