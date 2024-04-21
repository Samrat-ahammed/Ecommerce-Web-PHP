<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



if(isset($_GET["edit_account"])){
    // Check if the user is logged in
    if(isset($_SESSION["user_name"])){
        $user_session_name = $_SESSION["user_name"];
        $select_query = "SELECT * FROM `user_table` WHERE user_name = '$user_session_name'";
        $result_query = mysqli_query($conn, $select_query);
        // Check if there is a row fetched from the query
        if ($row_fetch = mysqli_fetch_assoc($result_query)) {
            $user_id = $row_fetch["user_id"];
            $user_name = $row_fetch["user_name"];
            $user_email = $row_fetch["user_email"];
            $user_img = $row_fetch["user_image"];
            $user_address = $row_fetch["user_address"];
            $user_mobile = $row_fetch["user_mobile"];
        } else {
            // Handle the case where no user data is found
            // You can redirect or display an error message
            // For example:
            echo "<script>alert('User data not found');</script>";
            // Redirect the user to a different page
            // header("Location: error.php");
            exit(); // Stop further execution of the script
        }
    } else {
        // Handle the case where the user is not logged in
        // You can redirect or display an error message
        // For example:
        echo "<script>alert('You need to log in first');</script>";
        // Redirect the user to the login page
        // header("Location: login.php");
        exit(); // Stop further execution of the script
    }
}

if(isset($_POST["user_update"])){
    $update_id = $user_id;
    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $user_address = $_POST["user_address"];
    $user_mobile = $_POST["user_mobile"];
    $user_image= $_FILES["user_image"]["name"];
    $user_image_tmp= $_FILES["user_image"]["tmp_name"];
    move_uploaded_file($user_image_tmp,"./user_images/$user_image");
    $update_data = "UPDATE `user_table` SET user_name = '$user_name', user_email = '$user_email', user_address = '$user_address', user_mobile = '$user_mobile', user_image = '$user_image' WHERE user_id = $user_id";

    $result_query_update = mysqli_query($conn,$update_data);
    if($result_query_update){
        echo "<script>alert('Account Updated Successfully');</script>";
        echo "<script>window.location.href='profile.php?edit_account';</script>";
    } else {
        // Handle the case where the update query fails
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 class="text-center text-success mb-4">Edit Account</h2>
    <form action="" method="post" enctype="multipart/form-data" class="">
        <div class="from-outline mb-4">
            <input type="text" class="form-control w-50 m-auto mb-3" value="<?php echo $user_name ?>" name="user_name">
            <input type="email" class="form-control w-50 m-auto mb-3" value="<?php echo $user_email?>"
                name="user_email">
            <div class="form-outline w-50 m-auto d-flex">
                <input type="file" class="form-control" name="user_image">
                <img src='./user_images/<?php echo $user_image?>' alt="" class="edit_img">
            </div>
            <input type="text" class="form-control w-50 m-auto mb-3" value="<?php echo $user_address ?>"
                name="user_address">
            <input type="text" class="form-control w-50 m-auto mb-3" value="<?php echo $user_mobile ?>"
                name="user_mobile">
            <input type="submit" class="bg-info px-5 py-2 border-0 mx-auto" name="user_update">

        </div>
    </form>
</body>

</html>