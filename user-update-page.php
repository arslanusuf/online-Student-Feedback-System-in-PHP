<?php 

session_start();
if(!$_SESSION['email'])
{
	header('location:login.php');
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>User Update page</title>
<link  type="text/css" rel="stylesheet" href="design/css/bootstrap.css" />
<link  type="text/css" rel="stylesheet" href="design/css/bootstrap.min.css" />
<link  type="text/css" rel="stylesheet" href="design/js/bootstrap.js" />

<script>

 function restric()
 {
	 alert("You are not allowed to change Email");
 }

</script>


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
<br/></br>

<spain>
    &nbsp;  &nbsp; <strong>Welcome: </strong><?php echo $_SESSION['email'] ?>
</spain>
<button name="logout" class="btn btn-danger text-white" style="float:right; margin-right:50px"><a href="logout.php" class="text-white" id="text-decoration"><strong>Logout</strong></a></button>


<br/><br/><br /><br />
<?php 
require 'config/config.php';
$que = "select * from user_register_tbl where email='$_SESSION[email]';";
$query = mysqli_query($conn, $que);

if($run = mysqli_fetch_array($query))
{
	$id=$run['id'];
	$course=$run['select_course'];
	$name=$run['name'];
	$name_of_gardian=$run['name_of_gardian'];
	$gender=$run['gender'];
	$email=$run['email'];
	$password=$run['password'];
	$address=$run['address'];
	$contact_no=$run['contact_no'];
}
else
echo "Query Working Failed";

	
?>


<form method="post" action="user-update-page.php" style="margin-left: 400px">
    <fieldset class="border p-5 w-75">
        <legend class="w-50">Update Student Info</legend>
<table>

	<tr>
    		<td width="200px" height="50px"><strong>Selecct Course</strong></td>
            <td width="300px"><select class="input" name="E_course">
						<option value=="Select_Course">SELECT COURSE</option>
            			<option value="BSCS" <?php if($run['select_course']=="BSCS") echo 'SELECTED'; ?> >BSCS</option>
            			<option value="BSIT" <?php if($run['select_course']=="BSIT") echo 'SELECTED'; ?> >BSIT</option>
            			<option value="BSSE" <?php if($run['select_course']=="BSSE") echo 'SELECTED'; ?> >BSSE</option>
						<option value="MCS"  <?php if($run['select_course']=="MCS") echo 'SELECTED'; ?> >MCS</option>
            			<option value="MIT"  <?php if($run['select_course']=="MIT") echo 'SELECTED'; ?> >MIT</option>
            	</select>
            </td>

    </tr>
    <tr>
    	
        <td height="50px"><strong>Name</strong></td>
        <td><input class="input" type="text" placeholder="Enter Name" name="E_name"  value="<?php echo $name; ?>" /></td><BR>
    </tr>  
     
    <tr>
    	<td height="50px"><strong>Name of Gardian</strong></td>
        <td><input class="input" type="text" placeholder="Enter Gardian Name" name="E_name_of_gardian" value="<?php echo $name_of_gardian; ?>"  /></td>
    </tr>    
    <tr>
    	<td height="50px"><strong>Gender</strong></td>
    <td>
    
    <select name="E_gender" class="input">
    <option >Select Gender</option>
    <option value="Male" <?php if($run['gender']=="male") echo 'SELECTED'; ?> >Male</option>
    <option value="Female" <?php if($run['gender']=="female") echo 'SELECTED'; ?> >Female</option>
    
    </select>
    
    </td>
   </tr>
    <tr>
    	<td height="50px"><strong>Email</strong></td>
		<td onclick="restric()"> <?php echo $email;?></td>

    </tr>    
    <tr>
    	<td height="50px"><strong>Password</strong></td>
		<td><input class="input" type="password" placeholder="Enter Password" name="E_password" value="<?php echo $password; ?>"  /></td>

    </tr>    
    <tr>
    	<td height="50px"><strong>Address</strong></td>
		<td><input class="input" type="text" placeholder="Enter Address" name="E_address" value="<?php echo $address; ?>"  /></td>
    </tr>    
    <tr>
    	<td height="50px"><strong>Contact No</strong></td>
		<td><input class="input" type="text" placeholder="Enter Contact No." name="E_contact_no" value="<?php echo $contact_no; ?>"  /></td>
    </tr>   

       </tr>
       <tr>
       <td height="100px" colspan="2" align="center"><input type="submit" value="Update" name="update" class="btn btn-primary btn-lg" /></td>
       </tr>
	</table>
    </fieldset>
</form>


<?php  

if(isset($_POST['update']))
{
	$E_course = $_POST['E_course'];
	$E_name = $_POST['E_name'];
	$E_name_of_gardian = $_POST['E_name_of_gardian'];
	$E_gender= $_POST['E_gender'];
	$E_password = $_POST['E_password'];
	$E_address = $_POST['E_address'];
	$E_contact_no = $_POST['E_contact_no'];
	
	$que = "update user_register_tbl set  select_course = '$E_course', name = '$E_name', name_of_gardian = '$E_name_of_gardian', gender = '$E_gender', password = '$E_password', address = '$E_address', contact_no = '$E_contact_no' where id='$id'; ";

	$query = mysqli_query($conn,$que);
	if($query)
		{
			echo "<script> window.open('user-home-page.php','_self'); </script>";
		}

}
?>



<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body>
</html>