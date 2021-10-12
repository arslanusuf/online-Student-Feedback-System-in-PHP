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


<button name="Admin update Info" class="btn btn-primary text-white" style="float:right; margin-right:50px"><a href="admin-update-page.php" class="text-white" id="text-decoration"><strong>Admin update Info</strong></a></button>


<br><br><br>
<?php 	

	$quee = "select * from admin_login where admin_email='$_SESSION[admin_email]'; ";
	$queryy = mysqli_query($conn,$quee);
	if($run=mysqli_fetch_array($queryy))
	{
		$Name=$run['Name'];
	}

 ?>

<center>

<form method="post" action="admin-home.php">
		<fieldset class="border p-5 w-50 ">
        	<legend class="w-50">Welcome <strong><?php echo $Name ?></strong></legend>
		        <table>
					        
			        <tr height="100px">
		        		<td><strong>Admit Students</strong></td>
		        		<td colspan="5" ><input type="Submit" name="clickhere" value="Click Here" class="btn btn-outline-primary text-truncate"></td>
			        </tr>
			        <tr>
		        		<td class=""><strong>Details of Students &nbsp;</strong></td>
		        		<td><spain><input type="submit" class="btn btn-outline-primary text-truncate" name="BSCS" value="BSCS"  /></spain></td>
		        		<td><spain><input type="submit" class="btn btn-outline-primary text-truncate" name="BSIT" value="BSIT"  /></spain></td>
		        		<td><spain><input type="submit" class="btn btn-outline-primary text-truncate" name="BSSE" value="BSSE"  /></spain></td>
		        		<td><spain><input type="submit" class="btn btn-outline-primary text-truncate" name="MCS" value="MCS"  /></spain></td>
		        		<td><spain><input type="submit" class="btn btn-outline-primary text-truncate" name="MIT" value="MIT"  /></spain></td>
			        </tr>
		        
       			</table>
        </fieldset>

</form>
</center>

<?php
$query='';
if(isset($_POST['clickhere']))
{
	$que = "select * from user_register_tbl;";
	$query = mysqli_query($conn, $que);
}elseif(isset($_POST['BSCS']))
{
	$que = "select * from user_register_tbl where select_course='BSCS';";
	$query = mysqli_query($conn, $que);
}elseif (isset($_POST['BSIT'])) {
	$que = "select * from user_register_tbl where select_course='BSIT';";
	$query = mysqli_query($conn, $que);
}
elseif (isset($_POST['BSSE'])) {
	$que = "select * from user_register_tbl where select_course='BSSE';";
	$query = mysqli_query($conn, $que);
}
elseif (isset($_POST['MCS'])) {
	$que = "select * from user_register_tbl where select_course='MCS';";
	$query = mysqli_query($conn, $que);
}
elseif (isset($_POST['MIT'])) {
	$que = "select * from user_register_tbl where select_course='MIT';";
	$query = mysqli_query($conn, $que);
}
if($query)
{
 ?>

<form align="center" style="margin-left:200px ">
	<fieldset class="border p-5 w-75">
		<legend class="w-50" align="left">Student Details</legend>
<table align="center" align="center">
	<th width="50px">ID</th>
	<th width="450px">Selected Course	</th>
	<th width="100px">Name</th>
	<th width="300px">Name of Gardian	</th>
	<th width="100px">Gender</th>
	<th width="400px">Email</th>
	<th width="700px">Address</th>
	<th width="200px">Contact No</th>

<?php 

while($run = mysqli_fetch_array($query))

{
	$id= $run['id'];
	$course=$run['select_course'];
	$name=$run['name'];
	$name_of_gardian=$run['name_of_gardian'];
	$gender=$run['gender'];
	$email=$run['email'];
	$address=$run['address'];
	$contact_no=$run['contact_no'];

?>
	<tr height="50px" class="border-bottom">
            <td>	<?php echo $id; ?>	</td>
    		<td>	<?php echo $course; ?></td>
            <td>	<?php echo $name; ?>	</td>
            <td>	<?php echo $name_of_gardian; ?></td>
            <td>	<?php echo $gender; ?></td>
            <td>	<?php echo $email; ?></td>
            <td>	<?php echo $address; ?>	</td>
            <td>	<?php echo $contact_no; ?></td>
           
     </tr>
<?php }
}

?>
 </table>
</fieldset>

</form>



</body>
</html>