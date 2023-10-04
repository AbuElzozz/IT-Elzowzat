<?php
function rental_history() {
    if (isset($_POST['car_id'])) {
        $car_id = $_POST['car_id'];
        if (!is_numeric($car_id)) {
            echo "<p>Invalid car ID</p>";
            return;
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "it_project";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $car_sql = "SELECT `name`, model, price FROM cars WHERE id = $car_id";
        $car_result = $conn->query($car_sql);
        $car_details = $car_result->fetch_assoc();
        $rental_sql = "SELECT rental_date, return_date, price FROM rentals WHERE car_id = $car_id ORDER BY rental_date DESC";
        $rental_result = $conn->query($rental_sql);

        $rental_history = array();
        if ($rental_result->num_rows > 0) {
            while ($row = $rental_result->fetch_assoc()) {
                $rental_history[] = $row;
            }
        }

        $conn->close();


        if (!empty($car_details) && !empty($rental_history)) {
            echo "<h2>Rental history for " . $car_details['name'] . " " . $car_details['model'] . "</h2>";
            echo "<table><tr><th>Rental date</th><th>Return date</th><th>Rental price</th></tr>";
            foreach ($rental_history as $rental) {
                if (isset($rental['rental_date'], $rental['return_date'], $rental['price'])) {
                    $rental_date = $rental['rental_date'];
                    $return_date = $rental['return_date'];
                    $rental_price = $rental['price'];
                    echo "<tr><td>$rental_date</td><td>$return_date</td><td>$rental_price</td></tr>";
                }
            }
            echo "</table>";
        } else if (!empty($car_details)) {
            echo "<p>No rental history found for this car.</p>";
        } else {
            echo "<p>Invalid car ID</p>";
        }
    }
}
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
    <link href="css/rentals.css" rel="stylesheet">
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
                        <a href="rentals.php" class="nav-item nav-link active ">Rentals History</a>
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


    <div class="container-fluid bg-white pt-3 px-lg-5">
    </div>
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">RENTAL HISTORY</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">RENTAL HISTORY</h6>
        </div>
    </div>
    <h1>Rental History</h1>
    <form method="post" action="">
        <label for="car_id">Car ID:</label>
        <input type="text" name="car_id">
        <input type="submit" value="Show Rental History">
    </form>
    <?php rental_history(); ?>
</body>
</html>


