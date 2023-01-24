<?php
include './logiclayer.php';
if(isset($_POST["b1"]))
	{
		$emp=new clsemp();
		$emp->empno=$_POST['']


}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="emp.php" method="post">
		<table border="20PX">
			<tr>
				<td>
					Enter Empno:
				</td>
				<td>
					<input type="text" name="t1" required value="<?php if(isset($ei)) echo $ei;?>">
				</td>
			</tr>

			<tr>
				<td>
					Enter Ename:
				</td>
				<td>
					<input type="text" name="t2" required value="<?php if(isset($en)) echo $en;?>">
				</td>
			</tr>

			<tr>
				<td>
					Enter Eadd:
				</td>
				<td>
					<input type="text" name="t3"  required value="<?php if(isset($ed)) echo $ed;?>">
				</td>
			</tr>

			<tr>
				<td>
					Enter Esal:
				</td>
				<td>
					<input type="text" name="t4" required value="<?php if(isset($es)) echo $es;?>">
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
	</form>

</body>
</html>