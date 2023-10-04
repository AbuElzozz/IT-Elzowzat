<?php
session_start();

if(isset($_POST['delete'])){

    $user_id = $_SESSION['id'];
    
    
    $conn = mysqli_connect("localhost","root","","it_project");

    $query = "DELETE FROM `regesteration_info` WHERE id = '$user_id'";

    $result = mysqli_query($conn,$query);

    if($result){
        header("location: logout.php");
    }else{
        header("location: testimonial.php");
    }


mysql_close($conn);
}




?>