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

	$sql = 'INSERT INTO game_videos(length, level, title) VALUES(:length, :level, :title)';

	$statement = $db->prepare($sql);
	$level = $_POST['videoLevel'];
	$title = $_POST['videoTitle'];
	$length = $_POST['videoLength'];

	$statement->bindParam(':level', $level);
	$statement->bindParam(':length', $lenght);
	$statement->bindParam(':title', $title);

	$statement->execute();
	} catch (Exception $PDOException) { 
        $error_message = $PDOException->getMessage();
        echo $error_message;   
    }
    $sql ="SELECT * FROM game_videos";
    $statement = $db->prepare($sql);
    $statement->execute();
 	$gamers = $statement->fetchAll(PDO::FETCH_ASSOC);
 	echo"<html><body style='background-color:aqua';>";
	foreach($gamers AS $game_videos)
	{
		echo "<b>Title: </b>".$game_videos['title']."<br /><b>Length:</b> ".$game_videos['length']."<br /><b>Level: </b>".$game_videos['level']."<br /><br />";
	}

?>