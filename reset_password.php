<?php 
session_start();
require 'register.php';
if (isset($_POST['reset_password']))
{
    $email 		    = $_SESSION['email'];
    $password1 	    = $_SESSION["pass"];
    $password2      = trim(htmlspecialchars($_POST['password2']));
    $checkpassword2 = trim(htmlspecialchars($_POST['checkpassword2']));
    
  if($password2==$checkpassword2){
        
      $variable= "SELECT * FROM `regesteration_info` WHERE email='$email' ";
    
        $result= mysqli_query($conn,$variable);
    
        $row= mysqli_fetch_assoc($result);  
    
        if (mysqli_num_rows($result) > 0 and $password1==$row['password1'] )
        {
            
            
            $stmt = "UPDATE `regesteration_info` SET password1 = '$password2' WHERE email='$email'";

            $query = mysqli_query($conn,$stmt);

            $_SESSION["pass"] = $password2;

            header("location: testimonial.php");

        }
    }else{
        $_SESSION["CheckPassError"] = "*Password isn't the same*";
        header("location: main_reset_password.php");
    }
     
}
mysqli_close($conn);
?>
