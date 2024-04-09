<!-- connect include folder -->
<?php
include("./includes/connect.php");
include("./Functiom/common_function.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecommerce website -Cart-Details</title>
    <!-- bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fornt asweam link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link favIcon  -->
    <link rel="icon" href="../images/logo.png" type="image/x-icon">
    <!-- css file link  -->
    <link rel="stylesheet" href="./style.css">
    <style>
    .cart_img {
        height: 100px;
        width: 100px;

    }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <!-- first child  -->
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
                <img src="./images/logo.png" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./display_products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup><?php 
                            get_cart_data();
                            ?></sup> </a>
                        </li>

                    </ul>


                </div>
            </div>
        </nav>
        <?php
         cart();
            ?>

        <!-- secund child  -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./user_area/user_login.php">Login</a>
                </li>
            </ul>
        </nav>

        <!-- third child  -->

        <div class="bg-light">
            <h3 class="text-center">Hidden Store</h3>
            <p class="text-center">Constructive feedback is crucial for personal and professional growth</p>
        </div>

        <!-- fourth child table  -->

        <div class="container">
            <form action="" method="post">
                <div class="row">
                    <table class="table table-bordered text-center">

                        <?php
                // Get the user's IP address
                $ip = getIPAddress();
                $total = 0;

                // Corrected SQL query with WHERE keyword
                $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip'";
                $result = mysqli_query($conn, $cart_query);
                $count_cart = mysqli_num_rows(($result));
                if($count_cart>0){
                echo "<thead>
                    <tr>
                    <th>Product-Title</th>
                    <th>Product Image</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Remove</th>
                    <th colspan='2'>Operation</th>
                    </tr>
                    </thead>
                <tbody>";
                      while ($row = mysqli_fetch_array($result)) {
                    $product_id = $row['product_id'];

                    // Fetch product price from products table
                    $product_query = "SELECT * FROM `products` WHERE product_id = $product_id";
                    $result_product = mysqli_query($conn, $product_query);

                    // Fetch the product price and add it to the total
                    if ($row_product_price = mysqli_fetch_array($result_product)) {
                        $product_price = $row_product_price['product_price'];
                        $price_table = $row_product_price['product_price'];
                        $product_title = $row_product_price['product_title'];
                        $product_img1 = $row_product_price['product_img1'];
                        $quantity = $row['quantity'];
                        $total += $product_price *$quantity;
                   ?>
                        <tr>
                            <td><?php echo $product_title; ?></td>
                            <td><img class="cart_img" src='./Admin-area/productImages/<?php echo $product_img1 ?>'
                                    alt=""></td>
                            <td>
                                <input name="qty[<?php echo $product_id; ?>]" value="<?php echo $quantity; ?>"
                                    type="number" class="form-control w-50 mx-auto">
                            </td>

                            <td><?php echo $price_table * $quantity; ?>/-</td>
                            <td><input type="checkbox" name="removeitem[]" value="<?php  echo $product_id ?>"></td>
                            <td>
                                <input type="submit" class="btn btn-primary" value="Update" name="update_cart">

                                <input type="submit" class="btn btn-danger" value="Remove" name="remove_cart">
                            </td>
                        </tr>
                        <?php
                    }
                   }
                }else{
                         echo "<h4 class='text-center text-info mx-auto'>No Items Found!</h4>";

                }
                ?>
                        </tbody>
                    </table>

                    <?php
                     // Get the user's IP address
                $ip = getIPAddress();
                    // Corrected SQL query with WHERE keyword
                $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip'";
                $result = mysqli_query($conn, $cart_query);
                $count_cart = mysqli_num_rows(($result));
                if($count_cart>0){

                    echo "     <div class='d-flex gap-4'>
                   <h4>Subtotal : <strong class='text-info'>" . $total . "/-</strong></h4>
                   <a href='./index.php' class='btn btn-danger px-3 py2'>Continue Shopping</a>
                   <a href='./checkout.php' class='btn btn-warning px-3'>Check-Out</a>

                 
                </div>";
                }else{
                echo "<a href='./index.php' class='btn btn-danger px-3 py2'>Continue Shopping</a>";
                }
                ?>

                </div>
            </form>
            <?php
function remove_item_cart (){
global $conn;
if(isset($_POST["remove_cart"])){
foreach($_POST['removeitem']  as $remove_id ){
    echo $remove_id;
    $delete_query = "DELETE FROM `cart_details` WHERE product_id = $remove_id";
    $run_delete  = mysqli_query($conn,$delete_query);
    if($run_delete){
        echo "<script>
        alert('Cart Delete Successfully.');
        window.location.href = window.location.href;
        </script>";
    }
}



}






}
$remove_item = remove_item_cart();

?>



            <?php
if (isset($_POST['update_cart'])) {
    global $conn;
    $ip = getIPAddress();
    $quantities = $_POST['qty'];
    $success = false; // Flag to track if any item was updated successfully
    
    foreach ($quantities as $product_id => $quantity) {
        // Sanitize input
        $product_id = mysqli_real_escape_string($conn, $product_id);
        $quantity = mysqli_real_escape_string($conn, $quantity);
        
        // Update cart details
        $update_query = "UPDATE `cart_details` SET quantity = $quantity WHERE product_id = $product_id AND ip_address = '$ip'";
        $result_product_query = mysqli_query($conn, $update_query);
        
        if ($result_product_query) {
            $success = true; 
        } else {
            echo "Error updating cart: " . mysqli_error($conn);
        }
    }

    if ($success) {
        // Display success message
      
        echo "<script>
        alert('Cart updated successfully.');
        window.location.href = window.location.href;
        </script>";
    }
}
?>




        </div>



        <!-- last child  -->
        <?php
        include("./includes/footer.php")
        ?>
    </div>




    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>