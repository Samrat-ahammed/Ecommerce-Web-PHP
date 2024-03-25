<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecommerce website useing php</title>
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
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total-Price: 10/-</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>


        <!-- secund child  -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </nav>

        <!-- third child  -->

        <div class="bg-light">
            <h3 class="text-center">Hidden Store</h3>
            <p class="text-center">Constructive feedback is crucial for personal and professional growth</p>
        </div>

        <div class="row">

            <!-- products  -->

            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="card" ">
  <img src=" ./images/apple.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to Card</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" ">
  <img src=" ./images/pant.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to Card</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" ">
  <img src=" ./images/pant.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to Card</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" ">
  <img src=" ./images/pant.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to Card</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" ">
  <img src=" ./images/pant.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to Card</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>




            <div class="col-md-2 bg-secondary p-0">
                <!-- sideNav  -->


                <!-- Brands  -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item bg-info px-2">
                        <a href="#" class="nav-link text-center">
                            <h4>Delivery Brands</h4>
                        </a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="#" class="nav-link text-light text-center">Brands</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="#" class="nav-link text-light text-center">Brands</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="#" class="nav-link text-light text-center">Brands</a>
                    </li>
                </ul>

                <!-- Categories -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item bg-info px-2">
                        <a href="#" class="nav-link text-center">
                            <h4>Categories</h4>
                        </a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="#" class="nav-link text-light text-center">Brands</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="#" class="nav-link text-light text-center">Brands</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="#" class="nav-link text-light text-center">Brands</a>
                    </li>
                </ul>


            </div>
        </div>





        <!-- last child  -->

        <!-- <div class="bg-info p-3 text-center">
  <p>Copyright © 2024 - All right reserved</p>
</div> -->
    </div>




    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>