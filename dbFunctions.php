<?php
require "password.php";
function connect()
{
	$user ="php";
	$password = "password";
	try
	{
   		$db = new PDO("mysql:host=localhost;dbname=signUp", $user, $password);
		return $db;
	}
	catch(PDOException $ex)
	{
    	echo "Error!: " . $ex->getMessage();
    	return false;
	}
}

function insertData($username, $password){
	try
	{
	    $sql = 'INSERT INTO login (username, password) VALUES(:username, :password)';
	    $db = connect();
	    $statement = $db->prepare($sql);
	    $pass = password_hash($password, PASSWORD_DEFAULT);
	    $statement->execute(array(":username"=>$username, ":password"=>$pass));
        
	    header('Location: log_in.php');
    } 
    catch (Exception $PDOException) 
    { 
      $error_message = $PDOException->getMessage();
      echo $error_message;   
    }

    
}
function getData($username, $password) 
{
    $db = connect();
	$sql ="SELECT * FROM login WHERE username = :username";
	$statement = $db->prepare($sql);
    $statement->execute(array(":username"=>$username));
    $log_in = $statement->fetch(PDO::FETCH_ASSOC);
    if(password_verify($password, $log_in['password']))
    {
        session_start();
        $_SESSION['userID'] = $login_in['id'];    
        $_SESSION['user'] = $log_in['username'];  
        header('Location: index2.php');
    }   
    else
    {
        echo "Not a valid username or password!<br>";
        return false;
    }
}
?>