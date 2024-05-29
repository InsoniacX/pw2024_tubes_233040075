<?php
    session_start();
    require 'src/functions/queryfunction.php';

    $userData = queryUserData("SELECT * FROM users");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieMates | Share & Review</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Vanilla CSS -->
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>

    <!-- Navbar Section Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-black position-fixed" style="z-index: 999; width: 100%;">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#" style="color: white; font-size: 32px;">MovieMates</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" style="color: white;" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon" style="color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color: white; font-size: 18px;">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#" style="color: white; font-size: 18px;">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-size: 18px;">
                Dropdown
            </a>
            <ul class="dropdown-menu bg-black" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#" style="color: white; font-size: 18px;">Action</a></li>
                <li><a class="dropdown-item" href="#" style="color: white; font-size: 18px;">Another action</a></li>
                <li><hr class="dropdown-divider" style="color: white; font-size: 18px;"></li>
                <li><a class="dropdown-item" href="#" style="color: white; font-size: 18px;">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    <!-- Navbar Section End -->




    
    <!-- Landing Page Content -->
        <div class="container-fluid d-flex px-0" style="padding-top: 70px;">
            <div class="container-fluid m-0 p-0">
                <h1 style="color: white; margin: 0 40px 20px 40px;"> WELCOME AveRose </h1>

                <!-- Carousel Starts -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="src/public/img/starrailstation-warp-11.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="src/public/img/starrailstation-warp-11.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="src/public/img/starrailstation-warp-11.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- Carousel Ends -->

                <!--  Landing Page Content -->
                <div class="container">
                    <h1 class="text-center">Welcome to </h1>
                </div>


            </div>
            <div class="container d-flex justify-content-center flex-wrap p-2" style="width: 320px;">

                <div class="card border border-black m-1" style="width: 18rem;">
                    <img src="src/public/img/Screenshot 2023-10-26 194646.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ketua Musim Kawin</h5>
                        <p class="card-text">Dahulu kala orang ini terkenal sebagai penjelajah lautan terbaik di seluruh Kalimantan Selatan</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card border border-black m-1" style="width: 18rem;">
                    <img src="src/public/img/Screenshot 2023-10-26 194646.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ketua Musim Kawin</h5>
                        <p class="card-text">Dahulu kala orang ini terkenal sebagai penjelajah lautan terbaik di seluruh Kalimantan Selatan</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card border border-black m-1" style="width: 18rem;">
                    <img src="src/public/img/Screenshot 2023-10-26 194646.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ketua Musim Kawin</h5>
                        <p class="card-text">Dahulu kala orang ini terkenal sebagai penjelajah lautan terbaik di seluruh Kalimantan Selatan</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>