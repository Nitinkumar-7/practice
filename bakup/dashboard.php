<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <form action="new.php" method="GET">
        <div class="form">
            <p><h3>Hey, <?php echo $_SESSION['username']."<br>";
            echo "user id = ". $_SESSION['id']; ?>!</h3></p>
            <p><h2>welcome to dashboard page.</h2></p>

            <input type="text" class="ppp login-input "id="ppp" name="content" >

            <!-- <input type="num" id="" class="login-input" name="user_id" > -->

            <input type="submit" value="submit" name="submit" class="login-button">

            <p><a href="logout.php">Logout</a></p>
          
        </div>
    </form>
     

</body>
</html>