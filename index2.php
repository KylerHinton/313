<?php
	session_start();
    if(isset($_SESSION['user']))
    {
        echo "Welcome, ".$_SESSION['user']."<br>";
        header('Location: database.php');
    }
    else
    {
        header('Location:log_in.php');
    }
?>

<!doctype html>
<html>
    <head>
        
    </head>
    
    <body>
        
       
    </body>
    
</html>