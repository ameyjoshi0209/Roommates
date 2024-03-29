<?php session_start();

if (!empty($_SESSION["uname"])) {
    $db = pg_connect("host=localhost port=5432 dbname=project user=postgres password=postgres");
?>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="../../Styles/home.css" />
    </head>

    <body>
        <!-- NAVIGATION BAR -->
        <div class="sem-bag">
            <div class="container-fluid position-absolute" id="nav-contain">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark pb-2 pt-2" style="border-radius: 20px;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand text-primary" href="../../Pages/Tenant/home.php">ROOMMATES</a>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a id="navlink" class="nav-item nav-link active" href="../Tenant/home.php">Home</a>
                            <a id="navlink" class="nav-item nav-link" href="../about.html">About</a>
                            <a id="navlink" class="nav-item nav-link" href="../../Pages/Tenant/sorted.php">Pricing</a>
                        </div>
                    </div>
                    <div class="btn-group dropstart">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="top: 6px;right: 5px;border: none;">
                            <img src="<?php echo $_SESSION["uimage"]; ?>" class="rounded-circle-1">
                        </button>
                        <ul class="dropdown-menu">
                            <h6 class="dropdown-header"><?php echo $_SESSION["uname"] ?></h6>
                            <li><a class="dropdown-item" href="../Tenant/tenant_profile.php"><img src="../../Img/Admin-Home/profile.svg" height="20" width="25" style="margin-right: 4px;"> My Profile</a></li>
                            <li><a class="dropdown-item" href="../Tenant/tenant_rented_prop.php"><img src="../../Img/Admin-Home/houses.svg" height="20" width="25" style="margin-right: 4px;"> My Property</a></li>
                            <li><a class="dropdown-item" href="../Tenant/tenant_logout.php"><img src="../../Img/Admin-Home/logout.svg" height="18" width="22" style="margin-right: 8px;"> Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        <div class="container">
            <div class="logo-bag"></div>
        </div>

        <!-- CITY CARD LAYOUT -->
        <div class="container-fluid" style="text-align: center;">
            <h1 style="margin-top: .8em;margin-bottom: .3em;">Recommended Cities</h1>
            <div class="scrolling-wrapper row flex-row flex-nowrap mt-1 pb-4 pt-3">

                <div class="col">
                    <a href="sorted.php?name=Pune" id="city-link">
                        <div class="card card-block">
                            <img src="https://cdn.iconscout.com/icon/free/png-512/shanivarwada-1-155226.png?f=avif&w=512" class="img-fluid card-img-top">
                            <h5 style="text-align: center;">Pune</h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="sorted.php?name=Hyderabad" id="city-link">
                        <div class="card card-block">
                            <img src="https://cdn.iconscout.com/icon/free/png-512/charminar-1-119696.png?f=avif&w=512" class="img-fluid card-img-top">
                            <h5 style="text-align: center;">Hyderabad</h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="sorted.php?name=Mumbai" id="city-link">
                        <div class="card card-block">
                            <img src="https://cdn.iconscout.com/icon/free/png-512/gatewayofindia-1-119691.png?f=avif&w=512" class="img-fluid card-img-top">
                            <h5 style="text-align: center;">Mumbai</h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="sorted.php?name=Delhi" id="city-link">
                        <div class="card card-block">
                            <img src="https://cdn.iconscout.com/icon/free/png-512/delhi-139357.png?f=avif&w=512" class="img-fluid card-img-top">
                            <h5 style="text-align: center;">Delhi</h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="sorted.php?name=Gujarat" id="city-link">
                        <div class="card card-block">
                            <img src="https://cdn.iconscout.com/icon/free/png-512/surat-155248.png?f=avif&w=512" class="img-fluid card-img-top">
                            <h5 style="text-align: center;">Gujarat</h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="sorted.php?name=Bangalore" id="city-link">
                        <div class="card card-block">
                            <img src="https://cdn.iconscout.com/icon/free/png-512/assembly-1-119693.png?f=avif&w=512" class="img-fluid card-img-top">
                            <h5 style="text-align: center;">Bangalore</h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="sorted.php?name=Kerala" id="city-link">
                        <div class="card card-block">
                            <img src="https://cdn.iconscout.com/icon/free/png-512/kerala-1-119688.png?f=avif&w=512" class="img-fluid card-img-top">
                            <h5 style="text-align: center;">Kerala</h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="sorted.php?name=Kolkata" id="city-link">
                        <div class="card card-block">
                            <img src="https://cdn.iconscout.com/icon/free/png-512/victoria-1-119694.png?f=avif&w=512" class="img-fluid card-img-top">
                            <h5 style="text-align: center;">Kolkata</h5>
                        </div>
                    </a>
                </div>
            </div>
            <a href="../Tenant/sorted.php" class="more-card-link">Explore more</a>
        </div>


        <!-- PROPERTY CARD LAYOUT -->
        <div class="container-fluid" style="margin-top: 5rem;">
            <h1 style="text-align: center;">Recommended Property</h1>
            <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="card h-100" id="property-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Property 1</h5>
                                        <p class="card-text">Best property in Nerul</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100" id="property-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Property 2</h5>
                                        <p class="card-text">Best property in Kerala</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100" id="property-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Property 3</h5>
                                        <p class="card-text">Best property in Hyderabad</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="card h-100" id="property-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Property 4</h5>
                                        <p class="card-text">Best property in Banglore</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100" id="property-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Property 5</h5>
                                        <p class="card-text">Best property in Pune</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100" id="property-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Property 6</h5>
                                        <p class="card-text">Best property in Wakad</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: end; margin-right: 40px; margin-top: 6px;">
                <a href="../sorted.html" class="more-card-link">Explore more
                </a>
            </div>
        </div>

        <!-- CUSTOMER REVIEWES CAROUSEL -->
        <div class="container-fluid" style="margin-top: 5rem; margin-bottom: 5rem;">
            <h1 style="text-align: center;">What our customers say</h1>
            <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-9">
                                <div class="card" id="review-card">
                                    <div class="card-body m-2">
                                        <div class="row">
                                            <div class="col-lg-5 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                                                <img src="https://t3.ftcdn.net/jpg/00/64/67/52/360_F_64675209_7ve2XQANuzuHjMZXP3aIYIpsDKEbF5dD.jpg" class="rounded-circle img-fluid shadow-1" alt="woman avatar" width="250" height="250" />
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-muted fw-light mb-4">
                                                    Personal Review 1
                                                </p>
                                                <p class="fw-bold lead mb-2"><strong>User 1</strong></p>
                                                <p class="fw-bold text-muted mb-0">Designation</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-9">
                                <div class="card" id="review-card">
                                    <div class="card-body m-2">
                                        <div class="row">
                                            <div class="col-lg-5 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                                                <img src="https://t3.ftcdn.net/jpg/00/64/67/52/360_F_64675209_7ve2XQANuzuHjMZXP3aIYIpsDKEbF5dD.jpg" class="rounded-circle img-fluid shadow-1" alt="woman avatar" width="250" height="250" />
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-muted fw-light mb-4">
                                                    Personal Review 2
                                                </p>
                                                <p class="fw-bold lead mb-2"><strong>User 2</strong></p>
                                                <p class="fw-bold text-muted mb-0">Designation</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>

    <footer class="text-center text-lg-start text-white mt-5" style="background-color: #bc700d90;">

        <section class="d-flex justify-content-between p-0" style="background-color: #5b3f03d7">
            <div class="mt-3" style="margin-left: 20px;">
                <span>
                    <h5>Get connected with us</h5>
                </span>
            </div>

            <div>
                <a href="" class="btn me-0" id="logo-btn">
                    <img src="../../Img/Home-Page/google.svg" height="40px" width="30px">
                </a>
                <a href="" class="btn me-0" id="logo-btn">
                    <img src="../../Img/Home-Page/twitter.svg" height="40px" width="30px">
                </a>
                <a href="" class="btn me-0" id="logo-btn">
                    <img src="../../Img/Home-Page/facebook.svg" height="40px" width="30px">
                </a>
                <a href="" class="btn me-0" id="logo-btn">
                    <img src="../../Img/Home-Page/instgram.svg" height="40px" width="30px">
                </a>
                <a href="" class="btn me-0" id="logo-btn">
                    <img src="../../Img/Home-Page/linkedin.svg" height="40px" width="30px">
                </a>
                <a href="" class="btn me-0" id="logo-btn">
                    <img src="../../Img/Home-Page/pinterest.svg" height="40px" width="30px">
                </a>
            </div>
        </section>

        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-2 col-lg-4 col-xl-3 mx-auto mb-4">
                        <img src="../../Img/logo2-trnslp1.png" height="70px" width="300px">
                        <p class="mt-4">
                            find your perfect home
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #593405; height: 3px" />
                        <p>
                            <a href="../Tenant/tenant_profile.php" class="text-white">Your Account</a>
                        </p>
                        <p>
                            <a href="../about.html" class="text-white">About</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">FAQ's</a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #593405; height: 3px" />
                        <p><i class="fas fa-home mr-3"></i>Indira College, Wakad</p>
                        <p><i class="fas fa-envelope mr-3"></i>roommates@test.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +91 1234567890</p>
                        <p><i class="fas fa-print mr-3"></i> +91 0987654321</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.262)">
            © 2023 Copyright:
            <a class="text-white" href="#">roommates.com</a>
        </div>
    </footer>

    </html>
<?php
} else {
    echo "<script>window.location.href='../Tenant/login.php';</script>";
} ?>