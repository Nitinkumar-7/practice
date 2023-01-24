<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<form class="form" action="" method="POST">
        <h1 class="login-title">Registration</h1>

        <input type="text" class="login-input" name="username" placeholder="Username" required />

        <input type="email" class="login-input" name="email" placeholder="Email Adress">

        <input type="password" class="login-input" name="password" placeholder="Password">

        <input type="submit" name="submit" value="Register" class="login-button">

        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>

<?php
    require('db.php');
    // When form submitted, insert values into the database.

    if (isset($_POST['username'])) {
        // removes backslashes
        $username =($_POST['username']);
       
        $email =($_POST['email']);
       
        $password =($_POST['password']);
      
        
        $sql = "INSERT INTO users (username, email, password)
                     VALUES ('".$username."', '".$email."', '".$password."')";

            if ($con->query($sql) === TRUE) {

             
                echo "You are registered successfully";
              
            } 
            else {
                echo 
                    "<h3>Required fields are missing"."</h3>"."<br/>";
                    
            }
        }
    mysqli_close($con);
?>
   

</body>
</html>