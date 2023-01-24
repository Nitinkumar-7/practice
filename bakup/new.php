<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <div class="division col">
    <?php
        require('db.php');
        session_start();

        if (isset($_GET['submit'])) {

            $text = $_GET['content'];
            $user_id = $_SESSION['eid'];
         
            $sql = "INSERT INTO databas (content, user_id)
                    VALUES ('".$text."', '".$user_id."')";
                    
              
                   if ($con->query($sql) === TRUE) {
                   
                            echo "<h2>"."entered data of user ".$_SESSION['username']." ". "are :"."<br>";
   
                            }
                            
                        
                        else {
                            echo 'error';
                        } 
             }
             ?>
             </div>
             
                     
                    



   
<div>
    <?php
      
               $newsql = "SELECT * FROM databas where user_id =(SELECT eid FROM users where eid='$user_id')";
               
                               $result = $con->query($newsql);
                                   if($result = mysqli_query($con, $newsql)){
                                       if(mysqli_num_rows($result) > 0){
                                        echo '<table border="2">';
                                               echo "<thead>";
                                                   echo "<tr>";
                                                       echo "<th>eid</th>";
                                                      
                                                       echo "<th>text</th>";
                                                    //  
                                                    
                                                     
                                                   echo "</tr>";
                                               echo "</thead>";
                                               echo "<tbody>";
                                               while($row = mysqli_fetch_array($result)){
                                                   echo "<tr>";
                                                       echo "<td>" . $row['id'] . "</td>";
                                                       echo "<td>" . $row['content'] . "</td>";

                                                       echo "<td>".'<a class="success" href="update.php?id='.$row['id'].'">Update</a>'."</td>";
                                                       echo "<td>".'<a class="success" href="delete.php?id='.$row['id'].'">Delete</a>'."</td>";
                                                    //    echo "<td>" . $row['user_id'] . "</td>";
                                                    //    echo "<td>" . $row[''] . "</td>";
                                                      
                                                   echo "</tr>";
                                               }
                                               echo "</tbody>";                                 
                                           echo "</table>";
                                          
                                       } else{
                                           echo 'errorrrr';
                                       }
                                   } else{
                                       echo "Oops! Something went wrong. Please try again later.";
                                   }
                                   ?>
                                   </div>


                                  

<div>
     <?php
                                   $newsql = "SELECT * FROM `users`INNER JOIN databas ON users.eid = databas.user_id ";
                                   $result = $con->query($newsql);
                                       if($result = mysqli_query($con, $newsql)){
                                           if(mysqli_num_rows($result) > 0){
                                               echo '<table border="2">';
                                                   echo "<thead>";
                                                       echo "<tr>";
                                                           echo "<th>eid</th>";
                                                          
                                                           echo "<th>text</th>";
                                                           echo "<th>user_id</th>";
                                                           echo "<th>email</th>";
                                                           echo "<th>password</th>";
                                                         
                                                       echo "</tr>";
                                                   echo "</thead>";
                                                   echo "<tbody>";
                                                   while($row = mysqli_fetch_array($result)){
                                                       echo "<tr>";
                                                           echo "<td>" . $row['eid'] . "</td>";
                                                           echo "<td>" . $row['content'] . "</td>";
                                                           echo "<td>" . $row['user_id'] . "</td>";
                                                           echo "<td>" . $row['email'] . "</td>";
                                                           echo "<td>" . $row['password'] . "</td>";
                                                        
                                                       echo "</tr>";
                                                   }
                                                   echo "</tbody>";                            
                                               echo "</table>";
                                              
                                           } else{
                                               echo 'error';
                                           }
                                       } else{
                                           echo "Oops! Something went wrong. Please try again later.";
                                       }
                               
             
            
                            //    Close connection
                               mysqli_close($con);
                   ?>
                   </body>
</html>
       

        
