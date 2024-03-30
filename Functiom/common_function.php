<?php
include("./includes/connect.php");


function getProduct() {
    global $conn; // Make sure $conn is accessible inside the function

    // Fetching products
    if (!isset($_GET['category']) && !isset($_GET['brand'])) {

        $select_query = "SELECT * FROM `products` ORDER BY RAND() LIMIT 0,9";
        $result_Query = mysqli_query($conn, $select_query);
        while ($row = mysqli_fetch_assoc($result_Query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_keywords = $row['product_keywords'];
            $product_img1 = $row['product_img1'];
            $category_id = $row['category_id'];
            $brands_id = $row['brands_id'];
?>
<div class='col-md-4 mb-2'>
    <div class='card'>
        <img src='./Admin-area/productImages/<?php echo $product_img1; ?>' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'><?php echo $product_title; ?></h5>
            <p class='card-text'><?php echo $product_description; ?></p>
            <a href='#' class='btn btn-info'>Add to Cart</a>
            <a href='#' class='btn btn-secondary'>View More</a>
        </div>
    </div>
</div>
<?php
        } // End of while loop
    }
}


// getting category by id 
function get_unq_category(){
    global $conn; // Make sure $conn is accessible inside the function

    // Fetching products
    if (isset($_GET['category'])) {

$category_id = $_GET['category'];

        $select_query = "SELECT * FROM `products` WHERE category_id = $category_id";
        $result_Query = mysqli_query($conn, $select_query);


        $num_of_rows = mysqli_num_rows($result_Query);
        
        if($num_of_rows==0){
            echo "<h2 class='text-center text-warning mt-4'>No Products have There</h2>";
        }
        
        while ($row = mysqli_fetch_assoc($result_Query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_keywords = $row['product_keywords'];
            $product_img1 = $row['product_img1'];
            $category_id = $row['category_id'];
            $brands_id = $row['brands_id'];
?>
<div class='col-md-4 mb-2'>
    <div class='card'>
        <img src='./Admin-area/productImages/<?php echo $product_img1; ?>' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'><?php echo $product_title; ?></h5>
            <p class='card-text'><?php echo $product_description; ?></p>
            <a href='#' class='btn btn-info'>Add to Cart</a>
            <a href='#' class='btn btn-secondary'>View More</a>
        </div>
    </div>
</div>
<?php
        } // End of while loop
    }


}


// getting Brands by id 
function get_unq_brands(){
    global $conn; // Make sure $conn is accessible inside the function

    // Fetching products
    if (isset($_GET['brand'])) {

        $brands_id = $_GET['brand'];

        $select_query = "SELECT * FROM `products` WHERE brands_id = $brands_id";
        $result_Query = mysqli_query($conn, $select_query);


        $num_of_rows = mysqli_num_rows($result_Query);
        
        if($num_of_rows==0){
            echo "<h2 class='text-center text-warning mt-4'>No Products have There</h2>";
        }
        
        while ($row = mysqli_fetch_assoc($result_Query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_keywords = $row['product_keywords'];
            $product_img1 = $row['product_img1'];
            $category_id = $row['category_id'];
            $brands_id = $row['brands_id'];
?>
<div class='col-md-4 mb-2'>
    <div class='card'>
        <img src='./Admin-area/productImages/<?php echo $product_img1; ?>' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'><?php echo $product_title; ?></h5>
            <p class='card-text'><?php echo $product_description; ?></p>
            <a href='#' class='btn btn-info'>Add to Cart</a>
            <a href='#' class='btn btn-secondary'>View More</a>
        </div>
    </div>
</div>
<?php
        } // End of while loop
    }


}


// get brands 
function getBrands (){
global $conn;
    $select_query = "SELECT * FROM `brands` ";
    $result_brands = mysqli_query($conn, $select_query);
    while($row_data = mysqli_fetch_assoc($result_brands)){
        $brand_title = $row_data["brands_title"];
        $brands_id = $row_data["brands_id"];
        echo "
        <li class='nav-item px-2'>
         <a href='index.php?brand=$brands_id' class='nav-link text-light text-center'>$brand_title</a>
    </li>";
    }
}


// getCategory 


function getCategory (){
global $conn;

    $select_query = "SELECT * FROM `category`";
    $result_category = mysqli_query($conn, $select_query); // Corrected variable name here
    while($row_data = mysqli_fetch_assoc($result_category)){
     $category_title = $row_data["category_title"];
     $category_id = $row_data["category_id"];
      echo "
         <li class='nav-item px-2'>
                 <a href='index.php?category=$category_id' class='nav-link text-light text-center'>$category_title</a>
                </li>";
         }
}

?>