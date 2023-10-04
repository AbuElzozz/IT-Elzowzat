<?php 
    //var_dump($_GET);
    $conn = mysqli_connect("localhost","root","","it_project");
    $variable = "SELECT * From cars where id = '$_GET[id]' ";
    $result = mysqli_query($conn,$variable);
    $row = mysqli_fetch_assoc($result);
    
    $id = $_GET['id'];
    $car_name = $row['name'];
    $model = $row['model'];
    $motor = $row['motor'];
    $consumption = $row['consumption'];
    $gps = $row['gps'];
    $bio = $row['bio'];
    $img = $row['img_name'];
    $price = $row['price'];
    
    $today = date("2023-04-23");
    $vailable_day = $row['location_1'];

    if(!( isset($_POST['done']) )){

        header("location: car.html");
    }

    mysqli_close($conn);
?>

<!-- Cars list Start -->
<?php
    function cars(){
        $conn = mysqli_connect("localhost","root","","it_project");
        $result = $conn->query("SELECT COUNT(*) FROM cars");
        $num_rows = $result->fetch_row()[0];
        
        for ($i=1; $i <= $num_rows; $i++) { 
            $conn = mysqli_connect("localhost","root","","it_project");
            $variable = "SELECT * From cars where id = '$i' ";
            $result = mysqli_query($conn,$variable);
            $row = mysqli_fetch_assoc($result);
            
            $downId = $row['id'];
            $downCarName = $row['name'];
            $downPrice = $row['price'];
            $downModel = $row['model'];
            $downMotor = $row['motor'];
            echo '<div class="rent-item">
                    <img class="img-fluid mb-4" src="img/car-rent/'.$downId.'.png" alt="">
                    <h4 class="text-uppercase mb-4">'.$downCarName.'</h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>'.$downModel.'</span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>'.$downModel.'</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>25K</span>
                        </div>
                    </div>
                    <a class="btn btn-primary px-3" href="car_details.php?id='.$i.'">More Details</a>
                </div>';
        }
    }
?>
<!-- Cars list End -->


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
        <h1 class="display-3 text-uppercase text-white mb-3">Car Booking</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Car Booking</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Detail Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase mb-5"><?php echo $car_name;?></h1>
            <div class="row align-items-center pb-2">
                <div class="col-lg-6 mb-4">
                    <img class="img-fluid" src="img/cars/<?php echo $img;?>/main.webp" alt="">
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="row">
                        <h4 class="col-md-3 col-6 mb-2">$<?php echo $price-0.01;?>/Day</h4>
                        <small class="text-primary text-uppercase"style="padding: 10px 0px 0px 70px;"><b># <?php if(strtotime($vailable_day) <= strtotime($today)){$vailable_day = $today ;echo "Car Available to Rent";} else {echo "CAR AVAILBALE IN DATE-[".$vailable_day."]";}?></b></small>
                    </div>
                        <div class="d-flex mb-3">
                        <h6 class="mr-2">Rating:</h6>
                        <div class="d-flex align-items-center justify-content-center mb-1" style="padding: 0px 0px 8px 0px;">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(250)</small>
                        </div>
                            
                    </div>
                    <p><?php echo $bio;?></p>
                    <a class="btn btn-primary px-3" href="car_details.php?id=1">More Details</a>
                    <a class="btn btn-primary px-3" href="booking.php?id=<?php echo $id; ?>">Booking Now</a>
                </div>
            </div>
            <div class="row mt-n3 mt-lg-0 pb-4">
                
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2"></i>
                    <span>Model: <?php echo $model;?></span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-cogs text-primary mr-2"></i>
                    <span><?php echo $motor;?></span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-road text-primary mr-2"></i>
                    <span><?php echo $consumption;?>km/liter</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-eye text-primary mr-2"></i>
                    <span>GPS Navigation</span>
                </div>
                
            </div>
            <section id="check"> </section>
        </div>
    </div>
    <!-- Detail End -->


    <!-- Car Booking Start -->
    <div class="container-fluid pb-5">
        <div class="container">
            <div>
                <form method="post" action="confirm.php">
                
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="from" value="<?php echo $_POST['date']; ?>">
                <input type="hidden" name="price" value="<?php echo $price * $_POST['days']; ?>">
                <input type="hidden" name="vailable" value="<?php echo date("Y-m-d", strtotime($_POST['date'] . "+".$_POST['days']." days")) ?>">
                <input type="hidden" name="request" value="<?php echo $_POST['special_request']; ?>">

                <div class="col-lg-4 col-lg-8">
                    <div class="bg-secondary p-5 mb-5">
                        <h2 class="text-primary mb-4">Checkout</h2>
                        <?php
                            echo"<li class='text-white'>Location: Cairo-Helwan</li>";
                            echo"<li class='text-white'>Date from: [".$_POST['date']."]</li>";
                            echo"<li class='text-white'>Date to: [".date("Y-m-d", strtotime($_POST['date'] . "+".($_POST['days']-1)." days"))."]</li>  ";
                            echo"<li class='text-white'>Payment Method: (Direct Check)</li>";
                            echo"<h5 class='text-white text-primary'>&emsp;Price: ".$price * $_POST['days']."$</h5>";
                            echo'<button type="submit" name="done" class="btn btn-block btn-primary py-3"><b>Confirm</b></button>
                            </div>';
                        ?>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <!-- Car Booking End -->

    <!-- Related Car Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <h2 class="mb-4">Related Cars</h2>
            <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
                <?php cars();?>
                
            </div>
        </div>
    </div>
    <!-- Related Car End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-2.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-4.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-7.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-8.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>