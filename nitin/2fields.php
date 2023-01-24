<?php
    # Check if name and email fileds are empty
    if(empty($_GET['name']) && empty($_GET['email'])){
        # If the fields are empty, display a message to the user
        echo " <br/> Please fill in the fields";
    # Process the form data if the input fields are not empty
    }else{
        $name= $_GET['name'];
        $email= $_GET['email'];
        echo ('Your Name is:     '. $name. '<br/>');
        echo ('Your Email is:'   . $email. '<br/>');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>HTML Form</title>
</head>
<body>
    <h1>HTML Form</h1>
    <form method="" action="">
        Name: <input type="text" name="name"><br><br/>
        Email: <input type="text" name="email"><br/>
        <br/>
        <input type="submit" value="submit" >
    </form>
</body>
</html>