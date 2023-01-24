<?php
 require('db.php');

 
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    echo "tat";
// sql to delete a record
$sql = "DELETE FROM databas WHERE text_id ='$id'";

if ($con->query($sql) === TRUE) {
  echo "<div class='container'> RECORD DELETED SUCESSFULLY</div>";
} else {
  echo "Error deleting record: " . $con->error;
}
}
$con->close();

?>
<style type="text/css">
    
.container{
    text-align: center;
    
    font-size: 40px;
    margin:15% auto;
    color: green;
}

</style>