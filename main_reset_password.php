<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Elzowzat Rental CARS | Discover the Future</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">ElZowzat Rental Cars</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link active">About</a>
                        <a href="car.html" class="nav-item nav-link active">Car Details</a>
                        <a href="rentals.php" class="nav-item nav-link active">Rentals History</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cars</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="carlist video.php" class="dropdown-item">Car Listing Video</a>
                                <a href="compare.php" class="dropdown-item">Car Compare</a> 
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="team.html" class="dropdown-item">The Team</a>
                                <a href="testimonial.php" class="dropdown-item">User Profile</a>
                                <a href="feedback.php" class="dropdown-item">Feedback</a>
                                <a href="user_removal.php" class="dropdown-item">Admin</a>
                            </div>
                        </div>
                        <a href="Login-register.html" class="nav-item nav-link active">Login/Register</a>
                        
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Search Start -->
    <div class="container-fluid bg-white pt-3 px-lg-5">
    
    </div>
    <!-- Search End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Reset password</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.html">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Reset password</h6>
        </div>
    </div>
    <!-- Page Header End -->
        <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <h1 class="display-4 text-uppercase text-center mb-5">reset your password</h1>
                <div class="row">
                    <div class="col-lg-7 mb-2">
                        <div class="contact-form bg-light mb-4" style="padding: 30px;">
                            <form action="reset_password.php" method="post">
                                <div class="form-group">
                                    <input type="password" class="form-control p-4" placeholder="New Password" required="required" name="password2">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control p-4" placeholder="Check New Password" required="required" name="checkpassword2">
                                    <strong style="color: rgba(220, 0, 0, 0.7);"><?php
                                      if(isset($_SESSION["CheckPassError"])){
                                        echo $_SESSION["CheckPassError"];
                                        unset($_SESSION["CheckPassError"]);
                                      }
                                       ?></strong>
                                </div>
                                <div>
                                    <input type="submit" name="reset_password" class="btn btn-primary py-3 px-5">
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-2">
                        <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 335px;">
                            <div class="d-flex mb-3">
                                <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                                <div class="mt-n1">
                                    <h5 class="text-light">Head Office</h5>
                                    <p>13 October Center, Giza, Egypt</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                                <div class="mt-n1">
                                    <h5 class="text-light">Branch Office</h5>
                                    <p>Elmahndsein, Cairo, Egypt</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                                <div class="mt-n1">
                                    <h5 class="text-light">Customer Service</h5>
                                    <p>FCAIH@example.com</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    
    
    </body>
    
    </html>
