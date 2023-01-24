<!DOCTYPE html>
<html lang="en">
<head>
    <title>Datastore</title>
</head>
<body>
    <style type="text/css">
        h1{
            background: orange;
            margin-top: 0px;
            margin: 0px;
        }
        center{
            background: #00ffff14;
            margin-top: 45px;
            border: solid gray 2px;
            width: 25%;
            padding:10px ;
            margin:10% auto;
        }
        label{
            position: absolute;
            padding: 0px 10px;
            background: indianred;
            color: white;

        }
        p{
           text-align:left;
        }
         input{
            margin-left: 20px;
            text-align:center;
            margin-left: 40%;
            height: 20px;
        }
        .btn {
            height: 30px;
            width: 100%;
            margin-left: 0%;
            border-radius: 5px;
        }
         

    </style>
    <center>
        <h1>FORM</h1>
        <form action="enterdata.php" method="post">
            
<p>
            <label for="firstName">First Name:</label>
         <input type="text" name="firstname" id="firstName">
            </p>

            
<p>
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastname" id="lastName">
            </p>
            
<p>
            <label for="Address">Address:</label>
            <input type="text" name="address" id="Address">
            </p>

            
<p>
            <label for="emailAddress">Email Address:</label>
            <input type="text" name="email" id="emailAddress">
            </p>
<p>
            <label for="Gender">srno:</label>
            <input type="text" name="srno" id="srno">
            </p>


            <input class="btn" type="submit" value="Submit">
            
        </form>
    </center>

  
</body>
 
</html>