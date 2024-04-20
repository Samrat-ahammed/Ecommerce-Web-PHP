<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include("../includes/connect.php");
include("../Functiom/common_function.php");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET["user_id"])){
    $user_id = $_GET["user_id"];
    //  getting all items and all items price 

    $ip = getIPAddress();
    $total_price = 0;
    $subtotal = 0; // Initialize subtotal to zero

    $cart_query_price = "SELECT * FROM `cart_details` WHERE ip_address = '$ip'";
    $result_cart_price = mysqli_query($conn, $cart_query_price);
    $invoice_number = mt_rand();
    $status = 'pending';

    // Count the number of products in the cart
    $count_product = mysqli_num_rows($result_cart_price);

    // Calculate total price of all items in the cart
    while ($row_price = mysqli_fetch_array($result_cart_price)){
        $product_id = $row_price['product_id'];
        $select_products = "SELECT * FROM `products` WHERE product_id = $product_id";
        $run_price = mysqli_query($conn, $select_products);
        while($row_product = mysqli_fetch_array($run_price)){
            $product_price = $row_product['product_price'];
            $total_price += $product_price; // Add product price to total_price
        }
    }

    // Fetch quantity from cart
    $get_cart = "SELECT * FROM `cart_details`";
    $result_cart = mysqli_query($conn, $get_cart);
    $get_item_quantity = mysqli_fetch_array($result_cart);
    $quantity = $get_item_quantity['quantity'];

    // Calculate subtotal based on total price and quantity
    if($quantity == 0) {
        $quantity = 1;
        $subtotal = $total_price;
    } else {
        $subtotal = $total_price * $quantity;
    }

    // Insert order into database
    $insert_order = "INSERT INTO `user_order` (user_id, amount_due, invoice_number, total_products, order_date, order_status) 
                     VALUES ('$user_id', '$subtotal', '$invoice_number', '$count_product', NOW(), '$status')";
    $result_query = mysqli_query($conn, $insert_order);
    
    // Insert order into database
    $insert_pending_order = "INSERT INTO `order_pending` (user_id, invoice_number, product_id, quantity, order_status) 
                             VALUES ('$user_id', '$invoice_number', '$product_id', $quantity, '$status')";
    $result_pending = mysqli_query($conn, $insert_pending_order);
    
  // delete item from cart 
  $delete_query = "DELETE FROM `cart_details` WHERE ip_address = '$ip'";

  $run_delete  = mysqli_query($conn,$delete_query);
 

    if($result_query){
        echo "<script>alert('Order Placed Successfully');</script>";
        echo "<script>window.location.href='./profile.php';</script>";
    }

  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order page</title>
</head>

<body>
    <h1>Order page</h1>
</body>

</html>