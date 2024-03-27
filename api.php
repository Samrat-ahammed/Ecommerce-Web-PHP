<?php 
include("./includes/connect.php");

$select_query = "SELECT * FROM `category`";
$result_category = mysqli_query($conn, $select_query); // Corrected variable name here

$category_data = array();
while ($row = mysqli_fetch_assoc($result_category)) {
    $category_data[] = $row;
}

$json_category = json_encode($category_data);
    
header('Content-Type: application/json; charset=utf-8');
echo $json_category;