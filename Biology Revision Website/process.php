<?php

// Get values from 
$user = 'root';
$password = 'root';
$db = 'login';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

if (isset ($_POST['username'])){

$username = $_POST['userid'];
$password = $_POST['pswrd'];

$sql= "select * from users where username ='".$username."'AND password='".$password."'
limit 1";


$result = mysql_query($sql);


	if(mysql_num_rows($result)==1){
		echo "you have succefully logged in";
		exit();
	}
	
	else{
		echo "you have entered Incorrect password";
		exit();
	}
}

?>

	

