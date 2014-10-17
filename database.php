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
echo "<b>ID: </b>".$games['game_id']."<br /><b>Username:</b> ".$games['username']."<br /><b>Game Name: </b>".$games['game_name'].' <br /><b>System:</b> '.$games['system_name']."<br /><b>Hours played:</b> ".$games['hours_played']."<br /><b>Game Finished:</b> ".$games['completed']."<br /><br />";
}
echo "<body style='background-color:beige;'>".
	"<div style='background-color:beige;border:15px solid;border-color:black; text-align:center; font-family:fantasy;color:blue; width:400px;margin:auto;'>".
		"<form action='survey.php' method='post' name='survey' id='myForm' style='text-align:left;'>".
     	 "<br/>What is your favorite type of game?<br/>".
      	 "<input type='radio' name='game' value='Side Scroller'>Side Scroller (Super Mario Bros)<br/>".
       	 "<input type='radio' name='game' value='MMORPG'>MMORPG (Massive Multiplay Online Role Playing Game)<br/>".
       	 "<input type='radio' name='game' value='RTS'>RTS (Real Time Strategy)<br/>".
       	 "<input type='radio' name='game' value='RPG'>RPG (Role Playing Game)<br/>".
         "<br/>What is your favorite gaming company?<br/>".
         "<input type='radio' name='gameC' value='blizzard'>Blizzard<br/>".
         "<input type='radio' name='gameC' value='riot'>Riot<br/>".
         "<input type='radio' name='gameC' value='bungie'>Bungie<br/>".
         "<input type='radio' name='gameC' value='ea'>Electronic Arts<br/>".
         "<br/>What is your favorite type of gaming?<br/>".
         "<input type='radio' name='gameT' value='computer'>Computer<br/>".
         "<input type='radio' name='gameT' value='console'>Console<br/>".
         "<br/>How many hours a day do you game?<br/>".
         "<input type='radio' name='gameH' value='1'>Less than 1<br/>".
         "<input type='radio' name='gameH' value='1to3'>1-3<br/>"
         "<input type='radio' name='gameH' value='3to5'>3-5<br/>".
         "<input type='radio' name='gameH' value='5'>Greater than 5<br/>".
   	 "<p><a href = 'survey.php'><p id='style3'>View Results</b></a></p>".
  			"<input type='submit' name='submit' value='Submit'>". 
	"<br/></div>";
echo "</body></html>"
?>​