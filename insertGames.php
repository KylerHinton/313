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

	$sql = 'INSERT INTO games(username, game_name, system_name, hours_played, completed) VALUES(:username, :game_name, :system_name, :hours_played, :completed)';

	$statement = $db->prepare($sql);
	$username = $_POST['insUsername'];
	$game_name = $_POST['insGameName'];
	$system_name = $_POST['insSystem'];
	$hours_played = $_POST['insHoursPlayed'];
	$completed = $_POST['insGameFinished'];
	$statement->bindParam(':username', $username);
	$statement->bindParam(':game_name', $game_name);
	$statement->bindParam(':system_name', $system_name);
	$statement->bindParam(':hours_played', $hours_played);
	$statement->bindParam(':completed', $completed);

	$statement->execute();
	} catch (Exception $PDOException) { 
        $error_message = $PDOException->getMessage();
        echo $error_message;   
    }
    $sql2 ="SELECT * FROM games";
    $statement = $db->prepare($sql2);
 	$gamers = $statement->fetchAll(PDO::FETCH_ASSOC);
 	echo"<html><body style='background-color:limegreen';>";
	foreach($gamers AS $games)
	{

	echo "<b>ID: </b>".$games['game_id']."<br /><b>Username:</b> ".$games['username'].
		"<br /><b>Game Name: </b>".$games['game_name'].' <br /><b>System:</b> '
		.$games['system_name']."<br /><b>Hours played:</b> ".$games['hours_played'].
		"<br /><b>Game Finished:</b> ".$games['completed']."<br /><br />";
	}

?>