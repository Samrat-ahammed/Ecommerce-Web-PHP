<?php 
$conn = mysqli_connect("localhost","root","password","My_store");

if(!$conn){
    die(mysqli_connect_error($conn));
}
?>