<?php
include("../includes/connect.php");
include("../Functiom/common_function.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecommerce website -Login page</title>
    <!-- bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fornt asweam link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link favIcon  -->
    <!-- <link rel="icon" href="../images/logo.png" type="image/x-icon"> -->
    <!-- css file link  -->
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Login Here</h2>
        <div class="row d-flex align-items-center justify-content-center  mt-5">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post">

                    <div class="form-outline mb-4">
                        <!-- user email  -->
                        <label for="user_user_email" class="from-label mb-2">User Email</label>
                        <input type="email" id="user_user_email" class="form-control" placeholder="Your Email"
                            name="user_email">
                    </div>

                    <div class="form-outline mb-4">
                        <!-- user Password  -->
                        <label for="user_password" class="from-label mb-2">User Password</label>
                        <input type="password" id="user_user_password" class="form-control" placeholder="Your Password"
                            name="user_password">
                    </div>


                    <div class="text-center">
                        <input type="submit" value="Login" class="btn btn-primary py-2 px-3" name="user_login">
                        <p class="mt-2 small fw-bold">New Here ? <a href="./user-register.php"
                                class="fw-bold">Register</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>



</html>

<?php
if(isset($_POST["user_login"])){
    $user_email = $_POST["user_email"];
    $user_password = $_POST["user_password"];
    $select_query = "SELECT * FROM `user_table` WHERE user_email = '$user_email' ";
    $result_query = mysqli_query($conn, $select_query);
    $number = mysqli_num_rows($result_query);
    
        if($number > 0){
        $row_data = mysqli_fetch_assoc($result_query);
        if(password_verify($user_password, $row_data["user_password"])){
            $ip_address = getIPAddress();
            $select_cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip_address' ";
            $select_cart = mysqli_query($conn, $select_cart_query);
            $count_rows = mysqli_num_rows($select_cart);
            $_SESSION["user_name"] = $row_data["user_name"]; 
            if($number ==1 && $count_rows==0){
                $_SESSION["user_email"] = $user_email;
                echo "<script>alert('Login Successfully');</script>";
                echo "<script>window.location.href='../index.php';</script>";
            }
            else{
                $_SESSION["user_email"] = $user_email;
                echo "<script>alert('Login Successfully');</script>";
                echo "<script>window.location.href='../payment.php';</script>";
            }
            }else{
                echo "<script>alert('Login Failed');</script>";
                echo "<script>window.location.href='./user_login.php';</script>";
            }
            }else{
            echo "<script>alert('Invalid Password');</script>";
            echo "<script>window.location.href='./user_login.php';</script>";

            }
            }else{
            echo "<script>alert('Invalid User');</script>";

            }
    










?>