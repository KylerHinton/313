<?php
require_once "dbFunctions.php";
if(isset($_POST['user_name']) && isset($_POST['password']))
{
    insertData($_POST['user_name'], $_POST['password']);
}
else
{
 echo '
<!doctype html>
<html>
    <head>
        
    </head>
    
    <body>
      <div id="loginForm">
            <h1>Sign-up</h1>
            <form action="sign_up.php" name="myForm"  method="post">
                <label>User Name: </label>
                <input type="text" name="user_name">
                <br>
                <label>Password: </label>
                <input type="password" name="password">
                <br>
                <input id="button" type="submit" name="action" value="Submit">
            </form>
        </div>
    </body>
</html> ';
 } 
?>