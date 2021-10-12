<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "college-of-it";
$table = "users";

$conn = mysqli_connect($host, $user, $pass, $db);
$db = mysqli_select_db($conn, "college-of-it") or die(mysqli_error($con));
/* if($conn)
{
	       		echo 'Connected successfully';
}else
{
				die('Could not connect: ' . mysql_error());
}



$que ="SELECT * FROM users where id=3;";
$query =  mysqli_query($conn ,$que);

*/


?>