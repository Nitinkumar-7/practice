<?php
$link=mysqli_connect("localhost","admin","admin","student");


if(isset($_POST["b1"]))
{
	$empno=$_POST["t1"];
	
	$ename=$_POST["t2"];
	$eadd=$_POST["t3"];
	$esal=$_POST["t4"];
	 $qry="INSERT chiku VALUES($empno,'$ename','$eadd',$esal)";
	$res=mysqli_query($link,$qry);
	
		if(mysqli_affected_rows($link)==1)
		{
			echo "data save successfully";
		}
		else
		{
			echo "data not save";
		}


	
}
if(isset($_REQUEST["eno"]))
{
	$eno=$_REQUEST["eno"];
	$qry="select * from chiku where empno=$eno";
	$res=mysqli_query($link,$qry);

	if($r=mysqli_fetch_array($res))
	{
		$ei=$r[0];
		$en=$r[1];
		$ed=$r[2];
		$es=$r[3];
	}
}

if(isset($_POST["b3"]))
{
	$empdel=$_POST["t1"];
	$qrydel="DELETE from chiku WHERE empno=$empdel";
	$res=mysqli_query($link,$qrydel);
	if(mysqli_affected_rows($link))
		{
			echo "data deleted";
		}
		else
		{
			echo "data not deleted";
		}
}

if(isset($_POST["b2"]))
{
	$enoupd=$_POST["t1"];
	$enupd=$_POST["t2"];
	$edupd=$_POST["t3"];
	$esupd=$_POST["t4"];
	$qryupd="UPDATE chiku set ename='$enupd',eadd='$edupd',esal=$esupd
	WHERE empno=$enoupd";
	$resupd=mysqli_query($link,$qryupd);
	if(mysqli_affected_rows($link))
		{
			echo "Data updated";
		}
		else
		{
			echo "Data not updated";
		}
}

?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Employee data</title>
		<style>

			body{
				margin: unset;
			}
			img{
				position: absolute;
				z-index: -1;
				height: 100%;
				width: 100%;
				rotate: 90deg;
			
				
			}
			.photo{
				rotate: 0deg;
					text-align: center;
			padding-top: 1px;
			box-shadow: 0px 1px 6px 2px white;
			border-radius: 7px;
			opacity: 0.9;
			margin: -188px;
			padding-top: 150px;
			}
			.maindiv{
				padding: 1%;
			}
			.buttons{
				text-align: center;
				align-content: center;
			
			margin: 1vmax 38vmax;
		}
		.data{

			text-align: center;
			border: 5px solid red;
		}
		table{
			align: center;
			margin: 5% auto 0px auto;
			 L
			font-size: 20px;
			width: 25%;
			height: 333px;
			z-index: 1;
			color: black;

		}

		td,tr,th{
			text-align: center;
			padding-top: 1px;
			box-shadow: 0px 1px 6px 2px white;
			border-radius: 7px;
			opacity: 0.9;
			background: wheat;
		}
	
		</style>
	
	</head>
	<body>
		<img src="C:\wamp64\www\nitin\aaaaa.jpg" alt="img">
		<div class="maindiv">
			<form action="empdata.php" method="POST"  enctype="multipart/form-data">
				<table  style="border-width: 4px; border-style: solid; border-image: linear-gradient(to bottom,red,rgba(0,0,0,0))1 100%; margin:12% auto;">
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


				</table>

				


					<tr >
						<td>
							<div class="buttons" style="">
							<input  type="submit" name="b1" value="save">
							<input  type="submit" name="b2" value="update">
							<input  type="submit" name="b3" value="delete">
							</div>
						</td>
					</tr>

					<table>
				

					<tr>

						<td class="pass">
							<img src="C:\wamp64\www\nitin\aaaaa.jpg" style="width:350px; height: 300px; align-content:" class="photo">
							<h2>entered data</h2>
							<?php
							$res=mysqli_query($link,"select * from chiku");
					// echo '<pre>';
					// print_r($res);
					echo '</pre>';
							while ($r=mysqli_fetch_array($res))
							{
					// echo '<pre>';
					// print_r($r);
					// echo '</pre>';
					// echo "Empno:$r[empno]<br>";	
					// 		echo "Ename:$r[ename]<br>";
					// 			echo "Eadd:$r[eadd]<br>";
					// 				echo "Esal:$r[esal]<br>";
								
								echo "<a href=empdata.php?eno=$r[0]>$r[1]</a><br>"; 
							

							} 
							?>
						</td>
					</tr>
				</table>

				
			</div>


	
	</body>
	</html>