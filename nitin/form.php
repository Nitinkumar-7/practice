<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
</head>



<?php

$link= mysqli_connect("localhost","root","","nitin");
if (isset($_POST["sum"])) 
{
	$fname=$_POST["first"];
	$lname=$_POST["second"];
	$gender=$_POST["gen"];
	$college=$_POST["college"];
$qry="INSERT student(fname,lname,gender,college)"
  . "VALUES('$fname','$lname','$gender','$college')";
$res=mysqli_query($link,$qry);
print_r($res);

/*	echo "first name: $fname<br>";
	echo "last name: $lname<br>";
	echo "gender: $gender<br>";
	echo "college:$college";
*/
}
if (mysqli_affected_rows($link)==1) {
	echo "data save successfully";
	// code...
}
else {
	echo "data not save";
}

if(isset($_REQUEST['second'])) {
	// code...
}
 ?>




<body>
<form action="" method="post" name="f1" enctype="multipart/form-data">
<table>
	<tr>
		<td>
			enter name 
		</td>
		<td>
			<input type="text" name="first">
		</td>
	</tr>
	<tr>
		<td>
			enter  last name
		</td>
		<td>
			<input type="text" name="second">
		</td>
	</tr>
    <tr>
    	<td>
    		enter the gender
    	</td>
    	<td>
    		<input type="radio" name="gen" value="m">male
    		<input type="radio" name="gen" value="f">female
    	</td>
    </tr>
    <tr>
    	<td>
    		select the college name
    	</td>
    	<td>
    		<select name="college">
    			<option value=dharmashala>govt college dharmashala</option>
    			<option value="kangra">MCM dav college kangra</option>
    			<option value="nagrota">govt college nagrota</option>
    			<option value="una">govt college una</option>
    			
    		</select>
    	</td>
    </tr>
    <tr>
    	<td>
    		<input type="submit" name="sum">
    	</td>
    </tr>
</table>
</form>
</body>
</html>