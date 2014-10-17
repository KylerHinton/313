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

$sql = "SELECT * FROM games";

$statement = $db->query($sql);
try
{
$statement = $db->prepare($sql);
$val = $statement->execute(array());
}
catch(PDOException $e)
{
echo $e->getMessage();
return false;
}
$gamers = $statement->fetchAll(PDO::FETCH_ASSOC);
echo "<html><body>";
foreach($gamers AS $games)
{
echo "<b>ID: </b>".$games['game_id']."<br /><b>Username:</b> ".$games['username']."<br /><b>Game Name: </b>".$games['game_name'].' <br /><b>System:</b> '.$games['system_name']."<br /><b>Hours played:</b> ".$games['hours_played']."<br /><b>Game Finished:</b> ".$games['completed']."<br />";
}
echo "</body></html>"
?>​