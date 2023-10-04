<?php 
$conn = mysqli_connect("localhost","root","","it_project");

if (isset($_POST['register']))
{
    $fullname 		= trim(htmlspecialchars($_POST['fullname']));
	$email 			= trim(htmlspecialchars($_POST['email']));
	$phonenumber	= trim(htmlspecialchars($_POST['phonenumber']));
	$password1 		= trim(htmlspecialchars($_POST['password1']));
    $checkpassword 	= trim(htmlspecialchars($_POST['checkpassword']));
    $gender 	    = $_POST['gender'];
    $Address        = trim(htmlspecialchars($_POST['Address']));
    $Bio            = trim(htmlspecialchars($_POST['Bio']));
    $img            = $_FILES['img'];
    
    //image processing
    
    $img_name = $img['name'];
    $img_type = $img['type'];
    $img_error = $img['error'];
    $img_tmp = $img['tmp_name'];
    $img_size = $img['size'];
    $img_ext = pathinfo($img_name,PATHINFO_EXTENSION);
    $img_newname = uniqid()."." . $img_ext;

    //move the image to the uploaded iamges folder

    move_uploaded_file($img_tmp,"uploaded_images/$img_newname");


    if ($password1==$checkpassword)
    {
        $stmt = "INSERT INTO regesteration_info(fullname,email,phonenumber,password1,gender,address1,Bio,img_name,Joining_date)
        VALUES('$fullname', '$email', '$phonenumber', '$password1','$gender','$Address','$Bio','$img_newname',NOW())";
        $result = mysqli_query($conn,$stmt);
        if ($result)
        {
            header("location:Login-register.html");
        }else{
            echo "<script>alert('Failed in register')</script>";  
        } 
    }
    else{
        echo "your passowrd not match";
    }
    
     
}
?>

