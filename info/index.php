

<?php 
 include('php_code.php');
 

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			
			$name = $n['name'];
			// $_SESSION['id'] = $n["id"];
			$address = $n['address'];
		}
	}

	// if (isset($_POST['update'])) {
	// 	// $id = $_SESSION['id'];
	// 	$id = $_POST['id'];

	// 	$name = $_POST['name'];
	// 	$address = $_POST['address'];
	
	// 	mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
	// 	$_SESSION['message'] = "Address updated!"; 
	// 	header('location: index.php');
	// }
	
	// 	if (isset($_GET['del'])) {
	// 		$id = $_GET['del'];
	// 		mysqli_query($db, "DELETE FROM info WHERE id=$id");
	// 		$_SESSION['message'] = "Address deleted!"; 
	// 		header('location: index.php');
	// 	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>





<form method="POST" action="php_code.php" >
		<div class="input-group">
			<label>Name</label>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $address; ?>">
		</div>
		<div class="input-group">
		<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
		</div>
	</form>



	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


<?php $results = mysqli_query($db, "SELECT * FROM info"); ?>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="index.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
		
	<?php } ?>

</table>    
</body>
</html>