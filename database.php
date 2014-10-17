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
echo "ID: ".$games['game_id']."<br /> Username:".$games['username']."<br /> Game Name: ".$games['game_name'].' <br /> System: '.$games['system_name']."<br />Hours played: ".$games['hours_played']."<br />Game Finished:".$games['completed']."<br />";
}
echo "</body></html>"
?>​