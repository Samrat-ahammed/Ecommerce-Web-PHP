<!-- connect include folder -->
<?php
include("../includes/connect.php");
include("../Functiom/common_function.php");
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Page</title>
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
    <link rel="stylesheet" href="../style.css">
    <style>
    .profile_img {

        padding: 5px;
        width: 80%;
        display: block;
        margin: auto;
        object-fit: contain;
    }

    .edit_img {
        width: 100px;
        height: 100px;
        object-fit: contain;
    }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <!-- first child  -->
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="" class="logo">
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
                            <a class="nav-link" href="./user_area/user-register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php 
                            get_cart_data();
                            ?></sup> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total-Price <?php
                            total_card_price ();
                            ?>/-</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search" action="./search_Product.php" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            name="search_data">
                        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
                    </form>

                </div>
            </div>
        </nav>


        <!-- secund child  -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <?php
                if(!isset($_SESSION["user_email"])){
                   echo "<li class='nav-item'>
                   <a class='nav-link' href='#'>Welcome Guest</a>
                    </li>";
                }else{
                    echo "<li class='nav-item'>
                    <a class='nav-link text-info' href='#'>Welcome ".$_SESSION["user_name"]."</a>
                     </li>";
                }
                ?>



                <?php
                if(!isset($_SESSION["user_email"])){
                   echo " <li class='nav-item'>
                   <a class='nav-link' href='./user_area/user_login.php'>Login</a>
                   </li>";
                }else{
                    echo " <li class='nav-item'>
                   <a class='nav-link' href='./logout.php'>Logout</a><li/>";
                }
                ?>
            </ul>
        </nav>

        <!-- third child  -->

        <div class="bg-light">
            <h3 class="text-center">Hidden Store</h3>
            <p class="text-center">Constructive feedback is crucial for personal and professional growth</p>
        </div>

        <div class="row">

            <!-- products  -->



            <div class="col-md-2 bg-secondary p-0">
                <!-- sideNav  -->
                <!-- Brands  -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item bg-info px-2">
                        <a href="#" class="nav-link text-center">
                            <h4>Your Profile</h4>
                        </a>
                    </li>
                    <?php
                        $user_name  = $_SESSION["user_name"];
                        $user_img_query = "SELECT * FROM `user_table` WHERE user_name = '$user_name'";
                        $result_query = mysqli_query($conn, $user_img_query);
                        $row_image = mysqli_fetch_array($result_query);
                        $user_image = $row_image["user_image"];

                        echo "<li class='nav-item bg-info px-2'>
                        <img src='./user_images/$user_image' alt='User Image' class='profile_img'>
                        </li>";
                        ?>

                    <li class='nav-item px-2'>
                        <a href='profile.php' class='nav-link text-light text-center'>Pending Order</a>
                    </li>
                    <li class='nav-item px-2'>
                        <a href='profile.php?edit_account' class='nav-link text-light text-center'>Edit Account</a>
                    </li>
                    <li class='nav-item px-2'>
                        <a href='profile.php?my_order' class='nav-link text-light text-center'>My Order</a>
                    </li>
                    <li class='nav-item px-2'>
                        <a href='profile.php?delete_account' class='nav-link text-light text-center'>Delete Account</a>
                    </li>
                    <li class='nav-item px-2'>
                        <a href='../logout.php' class='nav-link text-light text-center'>Logout</a>
                    </li>

                </ul>




            </div>
            <div class="col-md-10 text-center">

                <?php
                get_user_order_details ();
                if(isset($_GET["edit_account"])){
                    include("./edit_account.php");
                }
                if(isset($_GET["my_order"])){
                    include("./my_order.php");
                }
                ?>
            </div>
        </div>

        <!-- last child  -->
        <?php
        include("../includes/footer.php")
        ?>
    </div>




    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>