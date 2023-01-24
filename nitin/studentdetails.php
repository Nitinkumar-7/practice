<?php
$link= mysqli_connect("localhost","root","","student");
if(isset($_POST["b1"])) {
	$id=$_POST["id"];
	$name=$_POST["t1"];
	$class=$_POST["t2"];
	$address=$_POST["t3"];
	 
	$res=mysqli_query($link, "INSERT nitin VALUES($id,'$name','$class','$address')");

if (mysqli_affected_rows($link)==1) {
	echo "data save successfully";
}
else
{
	echo "data not save";
}
}
if (isset($_REQUEST["sno"]))
{
	$sno=$_REQUEST["sno"];
	echo $qry="select * from nitin where id=$sno";
	$res=mysqli_query($link,$qry);
   
    if($r=mysqli_fetch_array($res))
	{
		$si=$r[0];
		$sn=$r[1];
		$sc=$r[2];
		$sd=$r[3];
	}
}

if(isset($_POST["b2"]))
// {
// 	$stddel=$_POST["id"];
// 	$qrydel="DELETE from std WHERE student_id=$stddel";
// 	$res=mysqli_query($link,$qrydel);
// 	if(mysqli_affected_rows($link)==1)
// 		{
// 			echo "data deleted";
// 		}
// 		else
// 		{
// 			echo "data not deleted";
// 		}
// }

// if(isset($_POST["b3"]))
// {
// 	$enoupd=$_POST["id"];
// 	$enupd=$_POST["t1"];
// 	$edupd=$_POST["t2"];
// 	$esupd=$_POST["t3"];
// 	$qryupd="UPDATE std set student_name='$enupd',student_class='$edupd',student_address='$esupd'
// 	WHERE student_id=$enoupd";
// 	$resupd=mysqli_query($link,$qryupd);
// 	if(mysqli_affected_rows($link)==1)
// 	{
// 		echo "Data updated";
// 	}
// 	else
// 	{
// 		echo "Data not updated";
// 	}
// }
?>


<!doctype html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>student records</title>
	</head>
	<body>
		<form action="studentdetails.php" method="post">
	<table border="4px solid" style="text-align: center; color: blue; line-height: 40px;">
	     <tr>
	     	<td>
	     		student id:
	     	</td>
	     	<td>
	     		<input type="text" name="id" placeholder="enter Student id" value="<?php if(isset($si)) echo $si;?>">
	     	</td>
	     </tr>
	     <tr>
	     	<td>
	     		student name:
	     	</td>
	     	<td>
	     		<input type="text" name="t1" placeholder="enter the name" value="<?php if(isset($sn)) echo $sn;?>"  >
	     	</td>
	     </tr>
	     <tr>
	     	<td>
	     		student class:
	     	</td>
	     	<td>
	     		<input type="text" name="t2" placeholder="enter the class"  value="<?php if(isset($sc)) echo $sc;?>">
	     	</td>
	     </tr>
	     <tr>
	     	<td>
	     		student address:
	     	</td>
	     	<td>
	     		<input type="text" name="t3" placeholder="enter the address"  value="<?php if(isset($sd)) echo $sd;?>">
	     	</td>
	     </tr>
	       <tr >
	     	
	     	<td colspan="2">
	     		<input type="submit" name="b1">
	     
	     		<input type="submit" name="b2" value="delete" >
	     	
	     		<input type="submit" name="b3" value="update" >
	     	</td>
	     </tr>
	     	<tr>
				<td>
					<?php
					$res=mysqli_query($link,"select * from nitin");
					// echo '<pre>';
					// print_r($res);
					// echo '</pre>';
					while ($r=mysqli_fetch_array($res))
					{
					 // echo '<pre>';
					 // print_r($r);
					 // echo '</pre>';
					// echo "Empno:$r[empno]<br>";	
					// 		echo "Ename:$r[ename]<br>";
					// 			echo "Eadd:$r[eadd]<br>";
						//			echo "student_class:$r[student_class]<br>";
						echo "<a href=studentdetails.php?sno=$r[0]>$r[1]</a><br>";
					} 
					?>
				</td>
			</tr>
		
	</table>
	</form>
	</body>
	</html>