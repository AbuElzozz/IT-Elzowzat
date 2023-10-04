<?php 
require ('register.php');
// include ('session_info.php');
 session_start();

if (isset($_POST['login']))
{
	$email 			= trim(htmlspecialchars($_POST['email']));
	$password1 		= trim(htmlspecialchars($_POST['password1']));

    if($email=="ADMIN@gmail.com" and $password1=="1234"){
        $_SESSION['admin_email']     = $email;
        $_SESSION["admin_pass"]      = $password1;
       

        header("location: user_removal.php");
    }else{
   
   
    $variable       = "SELECT * From regesteration_info where email='$email' ";
    $result= mysqli_query($conn,$variable);
    $row= mysqli_fetch_assoc($result);  
    
    if (mysqli_num_rows($result) > 0 )
    {
        if($password1 == $row['password1'])
        {     
            // session_info($row['fullname'],$email,$row['Id'],$row['phoneNumber'],$row['gender'],$row['address1'],$row['Bio'],true);
            $_SESSION['email']     = $email;
            $_SESSION["pass"]      = $row['password1'];
            $_SESSION['phonenum']  = $row['phonenumber'];
            $_SESSION['name']      = $row['fullname'];
            setcookie('name', $row['fullname'], time()+86400);
            $_SESSION['address']   = $row['address1'];
            $_SESSION["login"]     = true;
            $_SESSION["id"]        = $row["id"];
            $_SESSION['gender']    = $row['gender'];
            $_SESSION['date']      = $row["Joining_date"];
            $_SESSION['bio']       = $row['Bio'];
            $_SESSION['img_name']  = $row['img_name'];

            header("location: testimonial.php");
        }
        else{    
             $_SESSION['passerror'] = "*Invalid Password*"; 
             header("location: login.php");   
        }
    }
    else{ 
        $_SESSION['emailerror'] = "*Invalid Email*";  
        header("location: login.php");     
    }
}
}
mysqli_close($conn);
?>

