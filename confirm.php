<?php

if(isset($_POST['done']))
{
    $conn = mysqli_connect("localhost","root","","it_project");
    $id = $_POST['id'];
    $booking_date= $_POST['from'];
    $date = $_POST['vailable'];
    $sql = "UPDATE `cars` SET `location_1` = '$date' WHERE id = $id";
    $result = mysqli_query($conn, $sql);



    $variable = "SELECT * From cars where id = '$id' ";
    $result2 = mysqli_query($conn, $variable);
    $row= mysqli_fetch_assoc($result2);
    $price= $_POST['price'];
    $query= "INSERT INTO rentals (car_id,rental_date,return_date,price) VALUES ('$id','$booking_date','$date','$price')";
    $query_result= mysqli_query($conn, $query);
    header("location: index.html");
    
    mysqli_close($conn);
}