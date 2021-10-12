<?php 
require '../config/config.php';
session_start();
if (!$_SESSION['admin_email']) {

	header('location:admin-login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Admin update page</title>
<link  type="text/css" rel="stylesheet" href="../design/css/bootstrap.css" />
<link  type="text/css" rel="stylesheet" href="../design/css/bootstrap.min.css" />
<link  type="text/css" rel="stylesheet" href="../design/js/bootstrap.js" />


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
}#text-decoration
{
 	text-decoration:none
}
</style>
</head>
<body>

<h1 align="center" style="color: 333333; font-family: Eras Bold ITC;"><img  src="../img/college.JPG" width="150" height="150" />COLLEGE OF IT & CS </h1>
<hr color="#666666">

<spain>
	&nbsp;	&nbsp; <strong>Welcome: </strong><?php echo $_SESSION['admin_email'] ?>
</spain>
<button name="logout" class="btn btn-danger text-white" style="float:right; margin-right:50px"><a href="admin-logout.php" class="text-white" id="text-decoration"><strong>Logout</strong></a></button>


<?php 

	if (isset($_SESSION['admin_email'])) {
		$form = 0;
	}

	if ($form==0)
	{
		$que ="select * from admin_login where admin_email='$_SESSION[admin_email]';";
		$query = mysqli_query($conn, $que);
		while($run = mysqli_fetch_array($query))
		{
			$name = $run['Name'];
			$admin_email = $run['admin_email'];
			$Password = $run['password'];
		}


	}

	if (isset($_POST['update'])) 
	{

		$que ="select * from admin_login where admin_email='$_SESSION[admin_email]';";
		$query = mysqli_query($conn, $que);
		while($run = mysqli_fetch_array($query))
		{
			$name = $run['Name'];
			$admin_email = $run['admin_email'];
			$Password = $run['password'];
		}
		$form=1;

	}
	

	if (isset($_POST['update-info']))
	{

		$name = $_POST['name'];
		$password = $_POST['password'];
 		$que ="update admin_login set  Name = '$name', password = '$password';";
		$query = mysqli_query($conn, $que);
		echo "<script type='text/javascript'>
		window.open('admin-update-page.php','_self');
	</script>";
 	}
	 ?>
	



<form method="post" action="admin-update-page.php" style="margin-left: 400px">
    <fieldset class="border p-5 w-75">
		<legend>Admin Update Info</legend>
		<table>
			<tr class="border-bottom" height="50px">
				<th width="100px">Name</th>
				<th width="200px">Admin Email</th>
				<th width="100px">Password</th>
			</tr>

			<tr class="border-bottom" height="50px">
    			<td><?php if($form==0)echo $name; else echo "<input type='text' name='name' value=$name> " ?></td>
    			<td><?php if($form==0)echo $admin_email; else echo $admin_email ?></td>
    			<td><?php if($form==0)echo $Password; else echo "<input type='password' name='password' value=$Password > " ?></td>

    		</tr>  
    		<tr height="50px">
    			<td><?php if($form==0) echo "<input class='btn btn-primary' type='submit' name='update' value='Update'> "; else echo "<input class='btn btn-primary' type='submit' name='update-info' value='Update Info'> ;" ?></td>

    		</tr>  
		</table>
	</fieldset>

</form>



</body>
</html>