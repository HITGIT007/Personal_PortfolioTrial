<?php

include_once('connection.php');

if(!empty($_POST["remember"])) {
setcookie ("adminname",$_POST["adminname"],time()+ 3600);
setcookie ("password",$_POST["password"],time()+ 3600);
header("location:admin.php?success");
} else {
setcookie("adminname","");
setcookie("password","");
header('location:admin.php?error');
}

function test_input($data) {

	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {

	$adminname = test_input($_POST["adminname"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM adminlogin");
	$stmt->execute();
	$users = $stmt->fetchAll();

	foreach($users as $user) {

		if(($user['adminname'] == $adminname) &&
			($user['password'] == $password)) {
				header("Location: adminpage.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}

?>
