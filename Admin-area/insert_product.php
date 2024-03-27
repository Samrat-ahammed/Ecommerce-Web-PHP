<?php
error_reporting(E_ALL); error_reporting(-1); ini_set('error_reporting', E_ALL); 
include("../includes/connect.php");



if(isset($_POST["insert_product"])) {

    $product_title = $_POST["product_title"];
    $product_description = $_POST["product_description"];
    $product_keywords = $_POST["product_keywords"];
    $product_category = $_POST["product_category"];
    $product_brand = $_POST["product_brand"];
    $product_price = $_POST["product_price"];

    // access image 
    $product_img1 = $_FILES["product_img1"]["name"];
    $product_img2 = $_FILES["product_img2"]["name"];
    $product_img3 = $_FILES["product_img3"]["name"];
    $product_status = true;
    // access img temp name 
    $product_img1_tmp = $_FILES["product_img1"]["tmp_name"];
    $product_img2_tmp = $_FILES["product_img2"]["tmp_name"];
    $product_img3_tmp = $_FILES["product_img3"]["tmp_name"];

    // checking 

    if($product_title == '' ){

     echo "<script>alert('Please fill all input')</script>";
    exit();
    }else{

        
        move_uploaded_file($product_img1_tmp,"productImages/$product_img1");
        move_uploaded_file($product_img2_tmp,"productImages/$product_img2",);
        move_uploaded_file($product_img3_tmp,"productImages/$product_img3",);

     
        $insert_product = "INSERT INTO `products` (product_title, product_description, product_keywords, category_id, brands_id, product_img1, product_img2, product_img3, product_price, date, status) 
        VALUES ('$product_title', '$product_description', '$product_keywords', '$product_category', '$product_brand', '$product_img1', '$product_img2', '$product_img3', '$product_price', NOW(), '$product_status')";

        $result_query = mysqli_query($conn,$insert_product);
        
  if($result_query)
{

    echo "<script>alert('Product Inserted Successfully');</script>";
}  
else{
    echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
}  
}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-dashboard || insert Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fornt asweam link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-light">
    <div class="container mt-3 w-50">


        <h1 class="text-center">Insert Products</h1>
        <form method="post" enctype="multipart/form-data">

            <!-- title  -->

            <div class="form-outline mb-4">
                <label for="product_title" class="form-label">Product Title</label>
                <input required placeholder="Title" type="text" class="form-control" id="product_title"
                    name="product_title">
            </div>

            <!-- description  -->

            <div class=" form-outline mb-4">
                <label for="product_description" class="form-label">Product Description</label>
                <input required placeholder="description" type="text" class="form-control" id="product_description"
                    name="product_description" ">
            </div>

            <!-- keywords  -->

            <div class=" form-outline mb-4">
                <label for="product_keywords" class="form-label">Product keywords</label>
                <input required placeholder="keywords" name="product_keywords" type="text" class="form-control"
                    id="product_keywords">
            </div>

            <!-- category -->
            <div class=" form-outline mb-4">
                <select name="product_category" id="product_category" class="form-select">
                    <option value="">Select A category</option>
                    <?php 
            $select_query = "Select * from `category`";
            $result_query = mysqli_query($conn, $select_query);

            while ($row = mysqli_fetch_assoc($result_query)) {
                $category_title= $row['category_title'];
                $category_id = $row['category_id'];
                echo "<option value='$category_id'>$category_title</option>";
            }
            ?>
                </select>
            </div>

            <!-- brand -->
            <div class="form-outline mb-4">
                <select name="product_brand" id="product_brand" class="form-select">
                    <option value="">Select A Brand</option>
                    <?php 
            $select_query = "SELECT * FROM `brands`";
            $result_query = mysqli_query($conn, $select_query);
            while ($row = mysqli_fetch_assoc($result_query)) {
                $brands_title = $row['brands_title'];
                $brands_id = $row['brands_id'];
                echo "<option value='$brands_id'>$brands_title</option>";
            }
            ?>
                </select>
            </div>


            <!-- Image1  -->

            <div class="form-outline mb-4">
                <label for="product_img1" class="form-label">Product Image</label>
                <input type="file" class="form-control" name="product_img1" id="product_img1">
            </div>

            <!-- Image2  -->

            <div class="form-outline mb-4">
                <label for="product_img2" class="form-label">Product Image-2</label>
                <input type="file" class="form-control" name="product_img2" id="product_img2">
            </div>
            <!-- Image3  -->

            <div class="form-outline mb-4">
                <label for="product_img3" class="form-label">Product Image-3</label>
                <input type="file" class="form-control" name="product_img3" id="product_img3">
            </div>


            <!-- price  -->
            <div class="form-outline mb-4">
                <label for="product_price" class="form-label">Product price</label>
                <input required placeholder="price" type="text" class="form-control" id="product_price"
                    name="product_price">
            </div>

            <!-- button  -->
            <div class=" form-outline mb-4">

                <input type="submit" class="btn btn-info mb-3 px-3" name="insert_product" "
                    value=" Insert-Product">
            </div>

        </form>

        <div />



        <!-- bootstrap js link  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>
</body>

</html>