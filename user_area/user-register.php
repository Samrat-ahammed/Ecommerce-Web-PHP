<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_Registration</title>
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
</head>

<body>
    <div class="container-fluid m-3">
        <h2 class="text-center">Register Here</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">


                    <div class="form-outline mb-4">
                        <!-- user name  -->
                        <label for="user_user_name" class="from-label mb-2">User Name</label>
                        <input type="text" id="user_user_name" class="form-control" placeholder="Your Name"
                            name="user_name">
                    </div>


                    <div class="form-outline mb-4">
                        <!-- user email  -->
                        <label for="user_user_email" class="from-label mb-2">User Email</label>
                        <input type="email" id="user_user_email" class="form-control" placeholder="Your Email"
                            name="user_email">
                    </div>

                    <div class="form-outline mb-4">
                        <!-- user Image -->
                        <label for="user_user_image" class="from-label mb-2">User Image</label>
                        <input type="file" id="user_user_image" class="form-control" name="user_image">
                    </div>

                    <div class="form-outline mb-4">
                        <!-- user Password  -->
                        <label for="user_password" class="from-label mb-2">User Password</label>
                        <input type="password" id="user_user_password" class="form-control" placeholder="Your Password"
                            name="user_password">
                    </div>

                    <div class="form-outline mb-4">
                        <!-- user Password  -->
                        <label for="user_confirm_Password" class="from-label mb-2">Confirm Password</label>
                        <input type="password" id="user_user_confirm_Password" class="form-control"
                            placeholder="Confirm Password" name="user_confirm_Password">
                    </div>

                    <div class="form-outline mb-4">
                        <!-- user_address  -->
                        <label for="user_address" class="from-label mb-2">Your Address</label>
                        <input type="text" id="user_address" class="form-control" placeholder="Your Address"
                            name="user_address">
                    </div>


                    <div class="form-outline mb-4">
                        <!-- contact -->
                        <label for="user_contact" class="from-label mb-2">Your Contact</label>
                        <input type="text" id="user_contact" class="form-control" placeholder="Your Contact"
                            name="user_contact">
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary py-2 px-3" name="user_register">
                        <p class="mt-2 small fw-bold">Already Have Account ? <a href="./user_login.php"
                                class="fw-bold">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>