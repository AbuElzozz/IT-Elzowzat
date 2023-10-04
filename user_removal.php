<?php 

session_start();

if(!isset($_SESSION['admin_email'])){
    header("location: login.php");
}



function deleteuser($user_id) {
    $conn = new mysqli("localhost", "root", "", "it_project");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $stmt = $conn->prepare("SELECT * FROM regesteration_info WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if($result->num_rows === 0) {
        echo "<p>user not found.</[p>";
        return;
    }

    $conn->begin_transaction();

    try {
    
        $stmt = $conn->prepare("DELETE FROM regesteration_info WHERE id = ?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $stmt->close();
        $conn->commit();
        
        echo "<p>User deleted successfully.</p>";
    } catch (Exception $e) {
        $conn->rollback();
        echo "<p>Error deleting User: </p>" . $e->getMessage();}

    $conn->close();}
    
?>

<!DOCTYPE html>
<html>
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
    <link href="css/car_removal.css" rel="stylesheet">
</head>
<body>
    
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

    
     <div class="container-fluid bg-white pt-3 px-lg-5">
    </div>


    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">ADMIN</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">ADMIN</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">DELETE USER</h6>
        </div>
    </div>
    <title>ADMIN</title>
    <?php
include ('show_users.php');
?>
    <h1>Delete User</h1>
    <form method="post">
        <label for="user_id">Enter User ID:</label>
        <input type="number" name="user_id" id="user_id" required>
        <br>
        <button type="submit" name="submit">Delete User</button>
    </form>

    <?php
        if(isset($_POST['submit'])) {
            $user_id = $_POST['user_id'];

    
            deleteuser($user_id);
        }

?>
</body>
</html>

