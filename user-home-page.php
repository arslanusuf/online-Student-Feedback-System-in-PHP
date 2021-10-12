<?php 
require 'config\config.php';

session_start();
if(!$_SESSION['email'])
{
	header('location:login.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>User home page</title>
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

<spain>
	&nbsp;	&nbsp; <strong>Welcome: </strong><?php echo $_SESSION['email'] ?>
</spain>
<button name="Select Faculty" class="btn btn-success text-white" style="float:right; margin-right:50px"><a href="select faculty.php" class="text-white" id="text-decoration"><strong>Select Faculty</strong></a></button>
<button name="logout" class="btn btn-danger text-white" style="float:right; margin-right:50px"><a href="logout.php" class="text-white" id="text-decoration"><strong>Logout</strong></a></button>


<br/><br/><br />
<?php 

$que = "select * from user_register_tbl where email='$_SESSION[email]';";

$query = mysqli_query($conn, $que);




if($run = mysqli_fetch_array($query))
{
	$course=$run['select_course'];
	$name=$run['name'];
	$name_of_gardian=$run['name_of_gardian'];
	$gender=$run['gender'];
	$email=$run['email'];
	$address=$run['address'];
	$contact_no=$run['contact_no'];
}
else
echo "Query Working Failed";

?>



<form method="post" action="user-update-page.php" align="center" style="margin-left: 400px;">
	<fieldset class="border p-5 w-75">
		<legend class="w-50" align="left">Student Details</legend>
<table align="center">


	<tr height="50px" class="border-bottom">
    		<td width="200px"><strong>Selected Course</strong></td>
            <td width="300px">	<?php echo $course; ?>	</td>

    </tr>
    <tr height="50px" class="border-bottom">
    	<td><strong>Name</strong></td>
            <td>	<?php echo $name; ?>	</td>
    </tr>  
     
    <tr height="50px" class="border-bottom">
    	<td><strong>Name of Gardian</strong></td>
            <td>	<?php echo $name_of_gardian; ?>	</td>
    </tr>    
    <tr height="50px" class="border-bottom">
    	<td><strong>Gender</strong></td>
            <td>	<?php echo $gender; ?>	</td>
    </td>
   </tr>
    <tr height="50px" class="border-bottom">
    	<td><strong>Email</strong></td>
            <td>	<?php echo $email; ?>	</td>

    </tr>    
    
    <tr height="50px" class="border-bottom">
    	<td><strong>Address</strong></td>
            <td>	<?php echo $address; ?>	</td>
    </tr>    
    <tr height="50px" class="border-bottom">
    	<td><strong>Contact No</strong></td>
            <td>	<?php echo $contact_no; ?>	</td>
    </tr>   


       </tr>
       <tr height="50px">
		<td colspan="2" align="center">	 <BR> 	<input type="submit" value="Update Info" name="submit" class="btn btn-primary" /></td>
       </tr>
	</table>	
</fieldset>

</form>

<?php 
mysqli_close($conn);
?>

</body>
</html>