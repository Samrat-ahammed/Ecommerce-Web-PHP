<?php
include("../includes/connect.php");

if(isset($_POST['insert_brands'])) {
    $brands_title = $_POST['brands-title'];

    $select_query = "SELECT * FROM `brands` WHERE brands_title = '$brands_title'";
    $result_select = mysqli_query($conn, $select_query);
    $number = mysqli_num_rows($result_select);

    if($number > 0) {
        echo "<script>alert('Brand Already Exists');</script>";
    } else {
        $insert_query = "INSERT INTO `brands` (brands_title) VALUES ('$brands_title')";
        $result = mysqli_query($conn, $insert_query);

        if($result) {
            echo "<script>alert('Brand Inserted Successfully');</script>";
            echo "<script>window.location.href='/Admin-area?insert_brands=true';</script>";
        }
    }
}
?>


<div class="bg-light">
    <h3 class="text-center p-2">Insert Brands</h3>
</div>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
        <input type=" text" class="form-control" name="brands-title" placeholder="Insert Brands" aria-label="Brands"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2">
        <input type="submit" type="submit" class="form-control bg-info p-2 my-3 border-0" value="Insert Brands"
            name="insert_brands">
    </div>

</form>

<script>
function submitForm() {
    document.getElementById("insertBrandsForm").submit();
    return false; // Prevent default form submission
}
</script>