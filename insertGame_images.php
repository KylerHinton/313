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

	$sql = 'INSERT INTO game_images(level, name, npc) VALUES(:level, :name, :npc)';

	$statement = $db->prepare($sql);
	$level = $_POST['insLevel'];
	$name = $_POST['insName'];
	$npc = $_POST['insNPC'];

	$statement->bindParam(':level', $level);
	$statement->bindParam(':name', $name);
	$statement->bindParam(':npc', $npc);

	$statement->execute();
	} catch (Exception $PDOException) { 
        $error_message = $PDOException->getMessage();
        echo $error_message;   
    }
    $sql ="SELECT * FROM game_images";
    $statement = $db->prepare($sql);
    $statement->execute();
 	$gamers = $statement->fetchAll(PDO::FETCH_ASSOC);
 	echo"<html><body style='background-color:beige';>";
	foreach($gamers AS $game_images)
	{

	echo "<b>Level: </b>".$game_images['level']."<br /><b>Name:</b> ".$game_images['name'].
	"<br /><b>NPC: </b>".$game_images['npc']."<br /><br />";
	}

?>