<?php 
require 'config/config.php';
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title> Login page </title>
<link  type="text/css" rel="stylesheet" href="design/css/bootstrap.css" />
<link  type="text/css" rel="stylesheet" href="design/css/bootstrap.min.css" />
<link  type="text/css" rel="stylesheet" href="design/js/bootstrap.js" />


<style>
#menu {
list-style:none;
display:inline-block;
}
#menu li{
list-style:none;
display:inline-block;
width:200px;
height:40px;
border:1px solid;

}

#left-bar
{
	float:left;
}

#left-bar li{
	list-style:none;
	width:250px;
	height:40px;
	border:1px solid;
	text-align:center;

}

#img
{
	float:right
}
.input
{
	width: 100%;
	height: 40px;
	border-radius: 5px;
	box-shadow: 1px 1px 1px 0;
	text-align: center;
}
input::placeholder
{
	text-align: center;
	font-size: 20px;
}#text-decoration
{
 	text-decoration:none
}

</style>
</head>
<body>

<header>
<h1 align="center" style="color: 333333; font-family: Eras Bold ITC;"><img  src="img/college.JPG" width="150" height="150" />COLLEGE OF IT & CS </h1><hr color="#666666">
</header>
<div align="center">

<ul id="menu" >
	<a href="home.php" class="text-white"><li class="btn btn-dark">Home</li></a>
	<a href="course.php" class="text-white"><li class="btn btn-dark">Certificate Course</li></a>
	<a href="contact_us.php" class="text-white "><li class="btn btn-dark">Contact Us</li></a>
</ul>
</div>
<br/><br/>



<div align="left">

<ul id="left-bar">
	<a href="about_us.php" id="text-decoration" class="text-white"> <li class="btn bg-dark list-group">About Us</li></a>
	<a href="login.php" id="text-decoration" class="text-white"> <li class="btn bg-dark text-light list-group">Login</li></a>
	<a href="facilities.php" id="text-decoration" class="text-white"> <li class="btn list-group bg-dark text-light">Facilities</li></a>
    <a href="site-map.php" id="text-decoration" class="text-white"> <li class="btn list-group bg-dark text-light">Site Map</li></a>
</ul>
</div>

<br />
<br />

<form action ="login.php" method ="post"  class="margin-25" style="margin-left: 400px">
	<fieldset class="border p-5 w-50" align="left">
		<legend class="w-25">Login</legend>
			<table class="w-100">
				<tr>
					<td>	<input type="email" name="email" placeholder="Enter Email" class="input"><br><br>				</td>
				</tr>
				<tr>
					<td>	<input type="password" name="password" class="input" placeholder="Enter Password"><br> <BR>	 	</td>
				</tr>
				<tr align="right">
					<td align="center">	<input type="submit" name="submit" value="Submit" class="btn btn-primary w-50"> <BR> <BR></td>
				</tr>
				<tr>
					<td align="center"><button  class="btn btn-primary w-25" name="signup"><a class="text-white" href="user-register-page.php">Register</a></button></td>
				</tr>
			</table>
      		
			
	</fieldset>
</form>

<?php 


$Semail='';
if(isset($_POST['submit']))
{
	$uemail = $_SESSION['email'] =	$_POST['email'];
	$upassword =	$_POST['password'];
	$que = "select * from user_register_tbl where email='$uemail' AND password='$upassword';";
	$query = mysqli_query($conn,$que);
	if(mysqli_num_rows($query)>0)
	{
		echo "<script> window.open('user-home-page.php','_self');</script>";
	}
	else
		echo "<script> alert('login Failed');</script>";




}
$Semail;

?>

</div>



</body>
</html>