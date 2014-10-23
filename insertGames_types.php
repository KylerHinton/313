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

	$sql = 'INSERT INTO game_types(adventure_story, arcade, first_person_shooter, real_time_strategy, role_playing) 
	VALUES(:adventure_story, :arcade, :first_person_shooter, :real_time_strategy, :role_playing)';

	$statement = $db->prepare($sql);
	$adventure_story = $_POST['advStory'];
	$arcade = $_POST['arc'];
	$first_person_shooter = $_POST['fps'];
	$real_time_strategy = $_POST['rts'];
	$role_playing = $_POST['rpg'];
	$statement->bindParam(':adventure_story', $adventure_story);
	$statement->bindParam(':arcade', $arcade);
	$statement->bindParam(':first_person_shooter', $first_person_shooter);
	$statement->bindParam(':real_time_strategy', $real_time_strategy);
	$statement->bindParam(':role_playing', $role_playing);

	$statement->execute();
	} catch (Exception $PDOException) { 
        $error_message = $PDOException->getMessage();
        echo $error_message;   
    }
    $sql ="SELECT * FROM game_types";
    $statement = $db->prepare($sql);
    $statement->execute();
 	$gamers = $statement->fetchAll(PDO::FETCH_ASSOC);
 	echo"<html><body style='background-color:silver';>";
 	echo"<h2><a href = 'database.php'><p>Enter another item</a></h2>";
	foreach($gamers AS $game_types)
	{
		echo "<b>ID: </b>".$game_types['user_id']."<br /><b>Adventure/Story:</b> ".$game_types['adventure_story'].
		"<br /><b>Arcade: </b>".$game_types['arcade'].' <br /><b>First Person Shooter:</b> '.$game_types['first_person_shooter'].
		"<br /><b>Real Time Strategy:</b> ".$game_types['real_time_strategy']."<br /><b>Role Playing:</b> ".$game_types['role_playing'].
		"<br /><br />";
	}

?>