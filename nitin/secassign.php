<?php
if(isset($_POST['b1']))
{
	$fname=$_POST['t1'];
	$lname=$_POST['t2'];
	$gen=$_POST['g1'];
    $edu=$_POST["chk"];
	$cnt=$_POST["cnt"];
	$dep=$_POST["dep"];
	$_file=$_FILES['filupl']["name"];
	echo "First name:$fname<br>";
	echo "Last name:$lname<br>";
	echo "Gender:$gen<br>";
	echo "Edu: $chk <br>";
	foreach ($edu as $v) {
		echo "$v<br>";
	}
    echo "Count:$cnt<br>";
    echo "Dept:$dep<br>";
    echo "Picture:$file<br>";


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
	<form action="secassign.php" method="post" enctype="multipart/form-data"> 
        <table>
			<tr>
				<td>
					Enter first Name:
				</td>
				<td>
					<input type="text" name="t1"/>
				</td>
			</tr>
			<tr>
				<td>
					Enter last name:
				</td>
					<td>
					<input type="text" name="t2"/>
				</td>
			</tr>

			<tr>
				
				<td>
					GENDER:
				</td>
				<td>
					<input type="radio" name="g1" value="M">Male:
					<input type="radio" name="g1" value="f">Female:
				</td>
			</tr>

			<tr>
				<td>
					Education:
				</td>
				<td>
					<input type="checkbox" name="chk[]" value="10th">10th
					<input type="checkbox" name="chk[]" value="12th">12th
					<input type="checkbox" name="chk[]" value="B.C.A">B.C.A
					<input type="checkbox" name="chk[]" value="M.C.A">M.C.A
				</td>
				</tr>
				<tr>
					<td>
						select Country:
					</td>
					<td>
						<select name="cnt">
							<option value="ind">india</option>
							<option value="uk">uk</option>
							<option value="japan">japan</option>
							
						</select>
					</td>
					</tr>

					<tr>
						<td>
							select Dep:
						</td>
						<td>
							<select name="dep" size="3">
							<option value="php">php</option>
							<option value="asp.net">asp.net</option>
							<option value="java">java</option>
							<option value="python">python</option>
							<option value="database">database</option>
							
						</select>
						</td>
						</tr>

					<tr>
						<td>
							Browse Pic:
						</td>
						<td>
							<input type="file" name="filup"/>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="b1" value="submit"/>
						</td>
					</tr>
				</table>
				</form>
			</body>
			</html>

					



				


			



		</table>
	</form>

</body>
</html>