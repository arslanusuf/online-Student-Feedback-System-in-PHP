<?php 
require 'config\config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Student Register page</title>
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



<br/><br/><br /><br />




<form method="post" action="user-register-page.php"  style="margin-left: 400px">
    <fieldset class="border p-5 w-75">
        <legend class="w-25">Registration</legend>
<table>

	<tr>
            <td width="200px" height="50px"><strong>Selecct Course</strong></td>
            <td width="300px"><select class="input" name="course">
						<option selected="selected">SELECT COURSE</option>
            			<option value="BSCS">BSCS</option>
            			<option value="BSIT">BSIT</option>
            			<option value="BSSE">BSSE</option>
						<option value="MCS">MCS</option>
            			<option value="MIT">MIT</option>
            	</select>
               </td>

    </tr>

    <tr>
        <td height="50px"><strong>Name</strong></td>
        <td><input class="input" type="text" placeholder="Enter Name" name="name"  required /></td>
    </tr>  
     
    <tr>
    	<td height="50px"><strong>Name of Gardian</strong></td>
        <td><input class="input" type="text" placeholder="Enter Gardian Name" name="name_of_gardian" required  /></td>
    </tr>    
    <tr>
    	<td height="50px"><strong>Gender</strong></td>
    <td>
    
    <select name="gender" class="input">
    <option>Select Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    
    </select>
    
    </td>
   </tr>
    <tr>
    	<td height="50px"><strong>Email</strong></td>
		<td><input class="input" type="Email" placeholder="Enter Email" name="email"   /></td>

    </tr>    
    <tr>
    	<td height="50px"><strong>Password</strong></td>
		<td><input class="input" type="password" placeholder="Enter Password" name="password"  required /></td>

    </tr>    
    <tr>
    	<td height="50px"><strong>Address</strong></td>
		<td><input class="input" type="text" placeholder="Enter Address" name="address" required /></td>
    </tr>    
    <tr>
    	<td height="50px"><strong>Contact No</strong></td>
		<td><input class="input" type="text" placeholder="Enter Contact No." name="contact_no" required /></td>
    </tr>   

    <tr align="center">
             	<td></td>
     </tr>
       <tr align="center">
         	<td></td>

     </tr>
       <tr align="center">
         	<td><br></td>

     </tr>

       </tr>
       <tr>
		<td colspan="2" align="right">
			<input type="submit" class="btn btn-primary align-content-end btn-lg"  value="Register" name="submit" />
		</td>
       </tr>
	</table>
</form>


<?php
if(isset($_POST['submit']))
{
    $course = $_POST["course"];
    $name = $_POST["name"];
    $name_of_gardian = $_POST["name_of_gardian"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $contact_no = $_POST["contact_no"];

        $que = "insert into user_register_tbl (select_course, name, name_of_gardian, gender, email, password, address, contact_no) value( '$course', '$name', '$name_of_gardian', '$gender', '$email', '$password', '$address', '$contact_no')";

    $query = mysqli_query($conn,$que);
        if($query)
            {
            	echo " <script> window.open('login.php','_self'); </script>";
            }
            
}

?>
















<?php 
mysqli_close($conn);
?>

</body>
</html>