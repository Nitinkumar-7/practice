<?php 
include './logiclayer.php';
if(isset($_POST['b1']))
{
	$emp=new clsemp();
	$emp->empno=$_POST["t1"];
	$emp->ename=$_POST["t2"];
	$emp->eadd=$_POST["t3"];
	$emp->esal=$_POST["t4"];
	$emp-> save_rec();
}
// if(isset($_REQUEST['eno']))
// {
// 	if($_REQUEST['mode']=='E')
// 	{
// 		$obj=new clsemp();
// 		$obj->empno=$_REQUEST['eno'];
// 		$obj->fnd_rec();
// 		$eno=$obj->empno;
// 		$en=$obj->ename;
// 		$ed=$obj->eadd;
// 		$es=$obj->esal;
// 		$_SESSION['eno']=$_REQUEST["eno"];

// 	}
// 	if($_REQUEST['mode']=='D')
// 	{
// 		$obj=new clsemp();
// 		$obj->empno=$_REQUEST['eno'];
// 		$obj->Delete_rec();
// 	}

// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="employee.php" method="post">
		<table border="20">
			<tr>
				<td>
					Enter Empno:
				</td>
				<td>
					<input type="text" name="t1"  value="<?php if(isset($ei)) echo $ei;?>">
				</td>
			</tr>

			<tr>
				<td>
					Enter Ename:
				</td>
				<td>
					<input type="text" name="t2"  value="<?php if(isset($en)) echo $en;?>">
				</td>
			</tr>

			<tr>
				<td>
					Enter Eadd:
				</td>
				<td>
					<input type="text" name="t3" value="<?php if(isset($ed)) echo $ed;?>">
				</td>
			</tr>

			<tr>
				<td>
					Enter Esal:
				</td>
				<td>
					<input type="text" name="t4" value="<?php if(isset($es)) echo $es;?>">
				</td>
			</tr>


			<tr>
				<td>
					<input type="submit" name="b1" value="save">
					<input type="submit" name="b2" value="update">
					<input type="submit" name="b3" value="delete">
				</td>
			</tr>
		</table>

		<!-- <table border="10">
			<?php
			$obj=new clsemp();
			$arr=$obj->disp_rec();
			if(count($arr)>0)
			{
				echo "<tr><th>Empno</th><th>Ename</th><th>Eadd</th><th>Esal</th>"
				. "<th></th></tr>";
				for($i=0;$i<count($arr);$i++)
				{
					echo "<tr><td>".$arr[$i][0]."</td><td>".$arr[$i][1]."</td><td>".$arr[$i][2]."</td>"
					."<td>".$arr[$i][3]."</td>";
					echo "<td><a href=employee.php?eno=".$arr[$i][0]."&mode=E>EDIT</a></td>";
					//echo "<td><a href=employee.php?eno=".$arr[$i][0]."&mode=D>DELETE</a></td></tr>";
				}
			} 
			?>
		</table> -->
	</form>

</body>
</html>
