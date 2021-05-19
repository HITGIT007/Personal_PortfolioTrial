<?php
    $con = mysqli_connect("localhost", "root","") or die("Error".mysqli_error());;
    echo "Connection to the server was succesfull";
    $sql = "CREATE DATABASE iwpjthcompo";
    if(mysqli_query($con,$sql)){
        echo "Database Is Created Succesfully<br/>";
    }else{
        echo "Error in Creating Database".mysqli_error();
    }
    $con = mysqli_connect("localhost", "root","","iwpjthcompo") or die("Error".mysqli_error());;
    echo "Connection to the server was succesfull";
        $sql = "CREATE TABLE MyMessage (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
cst_name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
phone INT(10),
sub_ject VARCHAR(30) NOT NULL,
my_message VARCHAR(100) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
    if(mysqli_query($con,$sql)){
        echo "Table Is Created Succesfully<br/>";
    }else{
        echo "Error in Creating Table".mysqli_error();
    }

?>
