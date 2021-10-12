<?php 
require '..\config\config.php';
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title> Login page </title>
<link  type="text/css" rel="stylesheet" href="../design/css/bootstrap.css" />
<link  type="text/css" rel="stylesheet" href="../design/css/bootstrap.min.css" />
<link  type="text/css" rel="stylesheet" href="../design/css/bootstrap.js" />


<style>

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

<h1 align="center" style="color: 333333; font-family: Eras Bold ITC;"><img  src="../img/college.JPG" width="150" height="150" />COLLEGE OF IT & CS </h1>
<hr color="#666666">
<div align="center">

<center>
	
<form action ="admin-login.php" method ="post">
	<fieldset class="border p-5 w-50" align="left">
		<legend class="w-50">Admin Login</legend>
			<table class="w-75"  align="center">
				<tr>
					<td>	<input type="email" name="email" placeholder="Enter Email" class="input"><br><br>				</td>
				</tr>
				<tr>
					<td>	<input type="password" name="password" class="input" placeholder="Enter Password"><br> <BR>	 	</td>
				</tr>
				<tr align="right">
					<td align="center">	<input type="submit" name="submit" value="Submit" class="btn btn-primary w-50"> <BR> <BR></td>
				</tr>

			</table>
      		
			
	</fieldset>
</form>
</center>

<?php 


if(isset($_POST['submit']))
{
	$uemail = $_SESSION['admin_email'] =	$_POST['email'];
	$upassword =	$_POST['password'];
	$que = "select * from admin_login where admin_email='$uemail' AND password='$upassword';";
	$query = mysqli_query($conn,$que);

	if(mysqli_num_rows($query)>0)
		{
			echo "<script> window.open('admin-home.php','_self');</script>";
		}
	else
			echo "<script> alert('login Failed');</script>";



}
$Semail;

?>

</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body>
</html>