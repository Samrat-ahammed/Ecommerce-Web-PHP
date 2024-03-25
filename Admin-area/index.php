<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fornt asweam link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file link  -->
    <link rel="stylesheet" href="./style.css">
    <title>admin-dashboard</title>

    <style>
    .AdminImg {
        width: 10%;
        object-fit: contain;
    }
    </style>

</head>

<body>
    <div class="container-fluid p-0">
        <!-- first child  -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="" class="logo">

                <div class="navbar navbar-expand-lg">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Welcome Guest</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <!-- secund child  -->

        <div class="bg-light">
            <h3 class="text-center p-2">Manage Gust</h3>
        </div>

        <!-- third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div>
                    <a href="#"><img class="AdminImg" src="../images/burger.jpg" alt="">
                        <p class="text-light">
                            Admin Name
                        </p>
                    </a>
                </div>

                <!-- all button -->
                <div class="button text-center d-flex">
                    <button class=" rounded shadow my-2"><a href=""
                            class="nav-link text-light bg-info my-1 mx-2 p-1">Insert
                            Products</a></button>
                    <button class=" rounded shadow my-2"><a href=""
                            class="nav-link text-light bg-info my-1 mx-2 p-1">View
                            Products</a></button>
                    <button class="rounded shadow my-2">
                        <a href="/Admin-area?insert_category=true"
                            class="nav-link text-light bg-info my-1 mx-2 p-1">Insert
                            Category.s</a>
                    </button>

                    <button class=" rounded shadow my-2"><a href=""
                            class="nav-link text-light bg-info my-1 mx-2 p-1">View
                            Category.s</a>
                    </button>
                    <button class=" rounded shadow my-2"><a <a href="/Admin-area?insert_brands=true"
                            class="nav-link text-light bg-info my-1 mx-2 p-1">Insert
                            Brands</a>
                    </button>
                    <button class=" rounded shadow my-2"><a href=""
                            class="nav-link text-light bg-info my-1 mx-2 p-1">View
                            Brands</a>
                    </button> <button class=" rounded shadow my-2"><a href=""
                            class="nav-link text-light bg-info my-1 mx-2 p-1">All Orders</a></button>
                    <button class=" rounded shadow my-2"><a href=""
                            class="nav-link text-light bg-info my-1 mx-2 p-1">All
                            Payments</a>
                    </button>
                    <button class=" rounded shadow my-2"><a href=""
                            class="nav-link text-light bg-info my-1 mx-2 p-1">List
                            User</a>
                    </button> <button class=" rounded shadow my-2"><a href=""
                            class="nav-link text-light bg-info my-1 mx-2 p-1">LogOut</a></button>
                </div>

            </div>
        </div>

        <!-- four child  -->

        <div class="container my-5">

            <?php
           if(isset($_GET["insert_category"]) ) {
            include("insert_category.php");
            }
            if(isset($_GET["insert_brands"]) ) {
                include("insert_brands.php");
                }

   ?>


        </div>



    </div>




    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>