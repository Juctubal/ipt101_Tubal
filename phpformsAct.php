<!DOCTYPE html>
<html lang="en">
<head>
    <title>lol</title>
</head>
<body>
   <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num = strlen($_POST['pass']);
        echo "<h1>Hello " .$_POST['fname']. ' ' .$_POST['lname'].  "!</h1>"; 
   
        echo "<h1> Your email is " .$_POST['eml']. "</h1>";
      
        echo "<h1>Your password has " .$num. " characters</h1>";
        
            if($_POST['pass'] == $_POST['cpass'])
            {
                echo "Your password is equal to confirm password :)";
            }
            else{
                echo "Your password is not equal to confirm password :(";
            }
    }   
    else{
        echo "Data request method is not set to post. The form will not be processed.";
    }
    
?>
    
</body>
</html>