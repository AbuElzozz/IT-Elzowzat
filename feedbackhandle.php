<?php

session_start();

if(isset($_POST['submit']))
{
    $feedback= $_POST['feedback'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "it_project";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $email = $_SESSION['email'];
    $sql = "INSERT INTO feedback(email,feedback,feedback_date)
     VALUES ('$email','$feedback',NOW())";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location: index.html');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}    
  
     



?>