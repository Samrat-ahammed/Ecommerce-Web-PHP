<!-- connect include folder -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment-Page</title>
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
    <link rel="stylesheet" href="./style.css">
    <style>
    img {
        width: 90%;
        display: block;
        margin: auto;
    }
    </style>
</head>



<body>
    <!-- php code for user id  -->
    <?php
   
    $ip = getIPAddress();
    $get_user = "SELECT * FROM `user_table` WHERE user_ip = '$ip'";
   
    $result = mysqli_query($conn, $get_user);
    $run_query = mysqli_fetch_array($result);
    $user_id = $run_query['user_id'];
    echo $user_id;
    ?>

    <div class="container">
        <h2 class="text-center text-info">
            Payment-option
        </h2>
        <div class="row d-flex justify-content-center align-items-center my-5">
            <div class="col-md-6">
                <a href="http://www.paypal.com" target="_blank">
                    <img src="./images/paypal1.webp" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <a href="./user_area/order.php?user_id=<?php echo $user_id; ?>" target="_blank">
                    <h2 class="text-center">
                        Pay Offline
                    </h2>
                </a>
            </div>

        </div>
    </div>
</body>

</html>