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

	$sql = 'INSERT INTO game_music(artist_name, ingame_loc, length, title) VALUES(:artist_name, :ingame_loc, :length, :title)';

	$statement = $db->prepare($sql);
	$artist_name = $_POST['insArtistName'];
	$ingame_loc = $_POST['insGameLoc'];
	$length = $_POST['insMusicLength'];
	$title = $_POST['insMusicTitle'];
	$statement->bindParam(':artist_name', $artist_name);
	$statement->bindParam(':ingame_loc', $ingame_loc);
	$statement->bindParam(':length', $length);
	$statement->bindParam(':title', $title);
	$statement->execute();
	} catch (Exception $PDOException) { 
        $error_message = $PDOException->getMessage();
        echo $error_message;   
    }
    $sql ="SELECT * FROM game_music";
    $statement = $db->prepare($sql);
    $statement->execute();
 	$gamers = $statement->fetchAll(PDO::FETCH_ASSOC);
 	echo"<html><body style='background-color:olive';>";
 	echo"<h2><a href = 'database.php'><p>Enter another item</a></h2>";
	foreach($gamers AS $game_music)
	{
	echo "<b>Title: </b>".$game_music['title']."<br /><b>Song Length:</b> ".$game_music['length']."<br /><b>Game Location of Music: </b>".$game_music['ingame_loc'].' <br /><b>Artists Name:</b> '.$game_music['artist_name']."<br /><br />";
	}

?>