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
    <!-- car compare customize-->
    <link rel="stylesheet" href="css/compare_show.css">
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
        <h1 class="display-3 text-uppercase text-white mb-3">Car Compare</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Car</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Start car Compare-->
    <div class="Car_Compare_list">
        <h2 class="car-compare-header">At this Section You 'll compare between cars <br>
            to select the best car for you </h2>
  <form action="" method="GET" >

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cars";
    $connetion = mysqli_connect($servername , $username  ,$password, $dbname );
    if(!$connetion){
      die("Failed to connect server") . mysqli_connect_error();
    }$i = 0;
    $query = "SELECT * FROM  car_informations ";
    $result = mysqli_query($connetion , $query);
    if(mysqli_num_rows($result)> 0 ){
      while ($car = mysqli_fetch_assoc($result)) {
        // $car_id = $car['car_id'];
        $car_name = $car['car_name'];
        $i++;
        echo "<input type='checkbox' name='selected_car[]' value='$car_name' id='$i'>
                <label for='$i'>$car_name</label><br>";
      }
      echo "<input type='reset' name='reset' class='reset'> 
      <input type='submit' name='submit' value='compare' class='submit'> ";
    }
?>
<?php

if(isset($_GET['submit'])){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cars";
  $connection = mysqli_connect($servername , $username  ,$password, $dbname );
  if(!$connection){
    die("Failed to connect server" . mysqli_connect_error());
  }
  else{
      echo ' <div class="table_style">
            <table cellpadding="3px">
            <thead>
            <tr class="table-row-head">
            <th> Car Name</th>
            <th> Car Speed</th>
            <th> Car Price per day</th>
            </tr>
            </thead>
            <tbody>
            ';
                if(count($_GET)>1){
                    $car= $_GET['selected_car'];
                    foreach ( $car as $car_name) {
                    $query = "SELECT speed , car_name , car_id , price_per_day FROM car_informations
                                    WHERE car_name = '$car_name' ";
                    $result = mysqli_query($connection , $query);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<div class="car-data">';
                                // echo  " <tr> . $row['car_name'] .  . $row['speed'] . '' .$row['price_per_day'] . </tr> ";
                                echo "<tr>";
                                echo  "<td>". $row['car_name'] ."</td>"  ;
                                echo  "<td>". $row['speed'] ."</td>"  ;
                                echo  "<td>". $row['price_per_day'] ."</td>"  ;
                                echo "</tr>";
                                echo '</div>';       
                                }   
                            }   
                        }  
                    }  
                    }  
                }  
?>
<!-- End car Compare-->
        </tbody>
        </table>
        </div>
    </form>
    </div>
    
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