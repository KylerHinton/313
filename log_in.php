<?php
require_once "dbFunctions.php";
if(isset($_POST['user_name']) && isset($_POST['password']))
{
    $result = getData($_POST['user_name'], $_POST['password']);
}
else
{
echo '<html>
    <head>
        
    </head>
    
    <body>
        <div id="loginForm">
            <h1>Sign in</h1>
            <form action="log_in.php" name="myForm"  method="post">
                <label>User Name: </label>
                <input type="text" name="user_name">
                <br>
                <label>Password: </label>
                <input type="password" name="password">
                <br>
                <input id="button" type="submit" name="action" value="Submit">
            </form>
            <h1><a href="sign_up.php">or Sign up</a></h1>
        </div>
    </body>
    
</html>';
}?>


