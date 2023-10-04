<?php

if(isset($_GET['search'])){
    
    $conn = mysqli_connect("localhost","root","","it_project");

    $car_id = $_GET['car_id'];

    $query = "SELECT * FROM `cars` WHERE id = '$car_id'";
    
    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0 ){

        $car_page = "car_details.php?id=" . $car_id;

        header("location: $car_page");
    }else{

        header("location: index.html");
    }


    mysqli_close($conn);




}




?>