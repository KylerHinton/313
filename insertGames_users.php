<?php

$user = "php";
$password = "password";
try{
	$db = new PDO("mysql:host=127.3.240.130:3306;dbname=video_game_db", $user, $password);
}
catch(PDOException $ex){
   echo "Error!: " . $ex->getMessage();
   die();
}

try{

	$sql = 'INSERT INTO users(create_date, email, skype_name, username) VALUES(:create_date, :email, :skype_name, :username)';

	$statement = $db->prepare($sql);
	$create_date = $_POST['createdOn'];
	$email = $_POST['email'];
	$skype_name = $_POST['skypeName'];
	$username = $_POST['usernameGame'];
	$statement->bindParam(':create_date', $create_date);
	$statement->bindParam(':email', $email);
	$statement->bindParam(':skype_name', $skype_name);
	$statement->bindParam(':username', $username);
	$statement->execute();
	} catch (Exception $PDOException) { 
        $error_message = $PDOException->getMessage();
        echo $error_message;   
    }
    $sql ="SELECT * FROM users";
    $statement = $db->prepare($sql);
    $statement->execute();
 	$gamers = $statement->fetchAll(PDO::FETCH_ASSOC);
 	echo"<html><body style='background-color:teal';>";
 	echo"<h2><a href = 'database.php'><p>Enter another item</a></h2>";
	foreach($gamers AS $users)
	{
		echo "<b>User ID: </b>".$users['user_id']."<br /><b>Username:</b> ".$users['username']."<br /><b>Skype Name: </b>".$users['skype_name'].' <br /><b>Email:</b> '.$users['email']."<br /><b>Created On:</b> ".$users['create_date']."<br /><br />";
	}

?>