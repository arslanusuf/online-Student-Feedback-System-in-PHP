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

<button name="logout" class="btn btn-danger text-white" style="float:right; margin-right:50px"><a href="logout.php" class="text-white" id="text-decoration"><strong>Logout</strong></a></button>



<form method="post" action="select faculty.php"  style="margin-left: 400px">
    <fieldset class="border p-5 w-100">
        <legend class="w-25">Faculty FeedBack</legend>
<table>

	<tr>
            <td width="200px" height="50px"><strong>Select Faculty</strong></td>
            <td width="300px"><select class="input" name="Selectf">
						<option selected="selected">SELECT Faculty</option>
            			<option value="A">A</option>
            			<option value="B">B</option>
            			<option value="C">C</option>
						<option value="D">D</option>
            			<option value="E">E</option>
            	</select>
               </td>

    </tr>

        
    <tr>
    	<td height="50px"><strong>Q1</strong></td>
    <td>
    
    <select name="Q1" class="input">
    <option selected="selected">Select </option>
    <option value="Strongly Agreed">Strongly Agreed </option>
    <option value="Agreed">Agreed</option>
	<option value="Good">Good</option>
	<option value="Disagreed">Disagreed</option>
	<option value="Strongly Disagreed">Strongly Disagreed</option>
    
    </select>
    
    </td>
   </tr>
       <tr>
    	<td height="50px"><strong>Q2</strong></td>
    <td>
    
    <select name="Q2" class="input">
    <option>Select </option>
    <option selected="selected">Select </option>
    <option value="Strongly Agreed">Strongly Agreed </option>
    <option value="Agreed">Agreed</option>
	<option value="Good">Good</option>
	<option value="Disagreed">Disagreed</option>
	<option value="Strongly Disagreed">Strongly Disagreed</option>
    </select>
    
    </td>
   </tr>
       <tr>
    	<td height="50px"><strong>Q3</strong></td>
    <td>
    
    <select name="Q3" class="input">
   <option selected="selected">Select </option>
    <option value="Strongly Agreed">Strongly Agreed </option>
    <option value="Agreed">Agreed</option>
	<option value="Good">Good</option>
	<option value="Disagreed">Disagreed</option>
	<option value="Strongly Disagreed">Strongly Disagreed</option>
    </select>
    
    </td>
   </tr>
       <tr>
    	<td height="50px"><strong>Q4</strong></td>
    <td>
    
    <select name="Q4" class="input">
    <option selected="selected">Select </option>
    <option value="Strongly Agreed">Strongly Agreed </option>
    <option value="Agreed">Agreed</option>
	<option value="Good">Good</option>
	<option value="Disagreed">Disagreed</option>
	<option value="Strongly Disagreed">Strongly Disagreed</option>
    </select>
    
    </td>
   </tr>
       <tr>
    	<td height="50px"><strong>Q5</strong></td>
    <td>
    
    <select name="Q5" class="input">
    <option selected="selected">Select </option>
    <option value="Strongly Agreed">Strongly Agreed </option>
    <option value="Agreed">Agreed</option>
	<option value="Good">Good</option>
	<option value="Disagreed">Disagreed</option>
	<option value="Strongly Disagreed">Strongly Disagreed</option>
    </select>
    
    </td>
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
			<input type="submit" class="btn btn-primary align-content-end btn-lg"  value="Submit FeedBack" name="submit" />
		</td>
       </tr>
	</table>
</form>


<?php
if(isset($_POST['submit']))
{
    $Selectf = $_POST["Selectf"];
    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
    $Q3 = $_POST["Q3"];
    $Q4 = $_POST["Q4"];
    $Q5 = $_POST["Q5"];
    
    

        $que = "insert into user_register_tbl (Selectf, Q1, Q2, Q3, Q4, Q5) value( '$Selectf', '$Q1', '$Q2', '$Q2', '$Q3', '$Q4', '$Q4')";

    $query = mysqli_query($conn,$que);
        if($query)
            {
            	echo " <script> window.open('login.php','_self'); </script>";
            }
			else{
				echo " <script> window.alert('Thanks!  Feedback Send Successfully'); </script>";
			}
            
}

?>

<?php 
mysqli_close($conn);
?>

</body>
</html>