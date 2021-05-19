<?php
if(isset($_POST['btn-send']))
    {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_temp_loc = $_FILES['file']['tmp_name'];
    $file_store = "upload/".$file_name;
    move_uploaded_file($file_temp_loc,$file_store);
    
    $con = mysqli_connect("localhost", "root","","iwpjthcompo") or die("Error".mysqli_error());;

    $sql = "INSERT INTO `mymessage` (`cst_name`, `email`, `phone`, `sub_ject`, `my_message`)
VALUES ('$name', '$email', $phone, '$subject', '$message')";

if(mysqli_query($con,$sql)){
        
        header("location:index.php?success");
      
    }
    else if(empty($name) || empty($email) || empty($subject) || empty($message))
       {
           header('location:index.php?error');
       }
    else{
        
        header('location:index.php?error1'.mysqli_error($con));
    }   
    }
    else
    {
        header("location:index.php");
    } 

?>
