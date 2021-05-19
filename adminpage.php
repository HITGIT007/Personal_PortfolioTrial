
<p><a href="index.php"> Go to Home Page </a> </p>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="styles.css">
    
    


</head>

<body>
<h1 class = "show-msg">
<?php


    $conn = mysqli_connect("localhost", "root","","iwpjthcompo") or die("Error".mysqli_error());;
    if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT id, cst_name, email, phone, sub_ject, my_message FROM mymessage";
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
  // output data of each row
 
  while($row = $result->fetch_assoc()) {
    echo "Id: " . $row["id"]. "</br>Name: " . $row["cst_name"]. "</br>Email: " . $row["email"]. "</br>Phone: " . $row["phone"]. "</br>Subject: " . $row["sub_ject"]. "</br>Message: " . $row["my_message"]."<br>";
    echo "</br>";
}
} else {
  echo "0 results";
}
$conn->close();


?></h1>
</body>
</html>