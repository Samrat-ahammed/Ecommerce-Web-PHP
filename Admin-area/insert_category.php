<?php
include("../includes/connect.php");

if(isset($_POST["insert_cat"])) {
$category_title = $_POST["cat-title"];
$select_query = "Select * from `category` where category_title = '$category_title'";
$result_select = mysqli_query($conn,$select_query);
$number = mysqli_num_rows($result_select);
if($number > 0) {
    echo "<script>alert('Category Already Exists');</script>";
} else {
    $insert_query = "INSERT INTO `category` (category_title) VALUES ('$category_title')";
    $result = mysqli_query($conn, $insert_query);
    if($result) {
        echo "<script>alert('Category Inserted Successfully');</script>";
        echo "<script>window.location.href='/Admin-area?insert_category=true';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }}

}




?>



<form action="" method="post" class="mb-2">

    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>

        </span>
        <input type=" text" class="form-control" name="cat-title" placeholder="Insert Categorys" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2">

        <input type="submit" type="submit" class="form-control bg-info p-2 my-3 border-0" value="Insert Category"
            name="insert_cat">

    </div>

</form>