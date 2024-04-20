<?php
// include("./includes/connect.php");


function getProduct() {
    global $conn; // Make sure $conn is accessible inside the function

    // Fetching products
    if (!isset($_GET['category']) && !isset($_GET['brand'])) {

        $select_query = "SELECT * FROM `products` ORDER BY RAND() LIMIT 0,4";
        $result_Query = mysqli_query($conn, $select_query);
        while ($row = mysqli_fetch_assoc($result_Query)) {
            $product_id= $row['product_id'];
            $product_title = $row['product_title'];
            $product_price = $row['product_price'];
            $product_description = $row['product_description'];
             $product_price = $row['product_price'];
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
            <p class='card-text'>Price:<?php echo $product_price; ?>/-</p>
            <a href='../index.php?add_to_cart=<?php echo $product_id; ?>' class='btn btn-info'>Add to Cart</a>
            <a href='../product_details.php?product_id=<?php echo $product_id; ?>' class='btn btn-secondary'>View
                More</a>
        </div>
    </div>
</div>
<?php
        } // End of while loop
    }
}


// getting all products 

function getAllProduct() {
    global $conn; // Make sure $conn is accessible inside the function

    // Fetching products
    if (!isset($_GET['category']) && !isset($_GET['brand'])) {

        $select_query = "SELECT * FROM `products` ORDER BY RAND()";
        $result_Query = mysqli_query($conn, $select_query);
        while ($row = mysqli_fetch_assoc($result_Query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
             $product_price = $row['product_price'];
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
            <p class='card-text'>Price:<?php echo $product_price; ?>/-</p>
            <a href='../index.php?add_to_cart=<?php echo $product_id; ?>' class='btn btn-info'>Add to Cart</a>
            <a href='../product_details.php?product_id=<?php echo $product_id; ?>' class='btn btn-secondary'>View
                More</a>
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
             $product_price = $row['product_price'];
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
            <p class='card-text'>Price:<?php echo $product_price; ?>/-</p>
            <a href='../index.php?add_to_cart=<?php echo $product_id; ?>' class='btn btn-info'>Add to Cart</a>
            <a href='../product_details.php?product_id=<?php echo $product_id; ?>' class='btn btn-secondary'>View
                More</a>
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
            echo "<div class='d-flex justify-content-center align-items-center vh-100'>
            <h2 class='text-center text-warning mt-4'>No Brands available for service</h2>
        </div>";
        }
        
        while ($row = mysqli_fetch_assoc($result_Query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
             $product_price = $row['product_price'];
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
            <p class='card-text'>Price:<?php echo $product_price; ?>/-</p>
            <a href='../index.php?add_to_cart=<?php echo $product_id; ?>' class='btn btn-info'>Add to Cart</a>
            <a href='../product_details.php?product_id=<?php echo $product_id; ?>' class='btn btn-secondary'>View
                More</a>
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


// searching Products 
function searchingProducts(){
    global $conn; // Make sure $conn is accessible inside the function

    // Fetching products
    if(isset($_GET["search_data_product"])){
        $search_data = $_GET["search_data"];
        // Specify the column names you want to select
        $search_query = "SELECT * FROM `products` WHERE product_title LIKE '%$search_data%' OR product_keywords LIKE '%$search_data%'";
        $result_Query = mysqli_query($conn, $search_query);
        $num_of_rows = mysqli_num_rows($result_Query);
        
        if($num_of_rows==0){
            echo "<div class='d-flex justify-content-center align-items-center vh-100'>
            <h2 class='text-center text-warning mt-4'>No Products Found!</h2>
        </div>";
        }


        while ($row = mysqli_fetch_assoc($result_Query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
             $product_price = $row['product_price'];
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
            <p class='card-text'>Price:<?php echo $product_price; ?>/-</p>
            <a href='../index.php?add_to_cart=<?php echo $product_id; ?>' class='btn btn-info'>Add to Cart</a>
            <a href='../product_details.php?product_id=<?php echo $product_id; ?>' class='btn btn-secondary'>View
                More</a>
        </div>
    </div>
</div>
<?php
        } // End of while loop
    }
}


// view details function 
function view_details(){
    global $conn; // Make sure $conn is accessible inside the function

    // Fetching products
    if (!isset($_GET['category']) && !isset($_GET['brand']) && isset($_GET['product_id'])) {
            $product_id = $_GET['product_id'];

        $select_query = "SELECT * FROM `products` WHERE product_id = $product_id";
        $result_Query = mysqli_query($conn, $select_query);
        while ($row = mysqli_fetch_assoc($result_Query)) {
            $product_id= $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
             $product_price = $row['product_price'];
            $product_keywords = $row['product_keywords'];
            $product_img1 = $row['product_img1'];
            $product_img2 = $row['product_img2'];
            $product_img3 = $row['product_img3'];
            $category_id = $row['category_id'];
            $brands_id = $row['brands_id'];
?>
<div class='col-md-4 mb-2'>
    <div class='card'>
        <img src='./Admin-area/productImages/<?php echo $product_img1; ?>' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'><?php echo $product_title; ?></h5>
            <p class='card-text'><?php echo $product_description; ?></p>
            <p class='card-text'>Price:<?php echo $product_price; ?>/-</p>
            <a href='../index.php?add_to_cart=<?php echo $product_id; ?>' class='btn btn-info'>Add to Cart</a>
            <a href='../index.php' class='btn btn-secondary'>Go-Home</a>
        </div>
    </div>
</div>
<div class="col-md-8">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-center text-info mb-5">Related_Products</h4>
        </div>
        <div class="col-md-6"> <img src='./Admin-area/productImages/<?php echo $product_img2; ?>' class='card-img-top'
                alt='...'></div>
        <div class="col-md-6"> <img src='./Admin-area/productImages/<?php echo $product_img3; ?>' class='card-img-top'
                alt='...'></div>
    </div>
</div>
<?php
        } // End of while loop
    }



}




function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  

function cart() {
    global $conn;
    
    // Check if add_to_cart parameter is set
    if(isset($_GET['add_to_cart'])) {
        $ip = getIPAddress();
        $get_product_id = $_GET['add_to_cart'];
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip' and product_id = $get_product_id";
        $result_Query = mysqli_query($conn, $select_query);
        $num_of_rows = mysqli_num_rows($result_Query);
        
        if($num_of_rows > 0) {
            // Product already in cart
            echo "<script>alert('Product already in cart')</script>";
        } else {
            // Insert product into cart
            $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES ($get_product_id, '$ip',0)";
            $result_Query = mysqli_query($conn, $insert_query);
            if($result_Query) {
                // Product successfully added to cart
                echo "<script>alert('Product successfully added to cart')</script>";
            } else {
                // Error adding product to cart
                echo "<script>alert('Error adding product to cart')</script>";
            }
        }
        // Redirect to index.php after message display
        echo "<script>window.open('../index.php','_self')</script>";
    }
}


// cart view_details 

function get_cart_data (){

    global $conn;
    
    // Check if add_to_cart parameter is set
    if(isset($_GET['add_to_cart'])) {
        $ip = getIPAddress();
        
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip'";
        $result_Query = mysqli_query($conn, $select_query);
        $cart_item_num = mysqli_num_rows($result_Query);
        
       
    }else{
        $ip = getIPAddress();
        
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip'";
        $result_Query = mysqli_query($conn, $select_query);
        $cart_item_num = mysqli_num_rows($result_Query);
        
        
    }
echo $cart_item_num;
}

// total price 
function total_card_price (){
    global $conn;
    // Get the user's IP address
    $ip = getIPAddress();
    $total = 0;

    // Corrected SQL query with WHERE keyword
    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip'";
    $result = mysqli_query($conn, $cart_query);

    while ($row = mysqli_fetch_array($result)) {
        $product_id = $row['product_id'];
        $quantity = $row['quantity']; // Get the quantity for the current item

        // Fetch product price from products table
        $product_query = "SELECT * FROM `products` WHERE product_id = $product_id";
        $result_product = mysqli_query($conn, $product_query);

        // Fetch the product price and multiply it by the quantity, then add it to the total
        if ($row_product_price = mysqli_fetch_array($result_product)) {
            $product_price = $row_product_price['product_price'];
            $total += $product_price ; // Multiply product price by quantity
        }
    }

    echo $total;
}







?>