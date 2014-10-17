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
echo "<b>".$games['game_id']." ".$games['username'].":".$games['game_name'].'</b> - "'.$games['system_name'].'"'.$games['hours_played'].$games['completed'];
}
echo "</body></html>"
?>​