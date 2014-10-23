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
 	$gamers = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach($gamers AS $game)
	{
	echo "<b>ID: </b>".$game['game_id']."<br /><b>Username:</b> ".$game['username']."<br /><b>Game Name: </b>".$game['game_name'].' <br /><b>System:</b> '.$game['system_name']."<br /><b>Hours played:</b> ".$game['hours_played']."<br /><b>Game Finished:</b> ".$game['completed']."<br /><br />";
	}
} catch (Exception $PDOException) { 
        $error_message = $PDOException->getMessage();
        echo $error_message;   
?>