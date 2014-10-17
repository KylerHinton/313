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
echo "<html><body style='background-color:maroon;'>";
echo "<h1>Video Game Database</h1>";
foreach($gamers AS $games)
{
echo "<b>ID: </b>".$games['game_id']."<br /><b>Username:</b> ".$games['username']."<br /><b>Game Name: </b>".$games['game_name'].' <br /><b>System:</b> '.$games['system_name']."<br /><b>Hours played:</b> ".$games['hours_played']."<br /><b>Game Finished:</b> ".$games['completed']."<br /><br />";
}
$gameImages = "SELECT * FROM game_images";
$statement = $db->query($gameImages);
try
{
$statement2 = $db->prepare($gameImages);
$val = $statement2->execute(array());
}
catch(PDOException $e)
{
echo $e->getMessage();
return false;
}
$gamerImages = $statement2->fetchAll(PDO::FETCH_ASSOC);
foreach($gamerImages AS $game_images)
{
echo "<b>Level: </b>".$game_images['level']."<br /><b>Name:</b> ".$game_images['name']."<br /><b>NPC: </b>".$game_images['npc']."<br /><br />";
}
$gameMusic = "SELECT * FROM game_music";

$statement3 = $db->query($gameMusic);
try
{
$statement3 = $db->prepare($gameMusic);
$val = $statement3->execute(array());
}
catch(PDOException $e)
{
echo $e->getMessage();
return false;
}
$gamerMusic = $statement3->fetchAll(PDO::FETCH_ASSOC);
foreach($gamerMusic AS $game_music)
{
echo "<b>Title: </b>".$game_music['title']."<br /><b>Song Length:</b> ".$game_music['length']."<br /><b>Game Location of Music: </b>".$game_music['ingame_loc'].' <br /><b>Artists Name:</b> '.$game_music['artist_name']."<br /><br />";
}
$gameType = "SELECT * FROM game_types";

$statement4 = $db->query($gameType);
try
{
$statement4 = $db->prepare($gameType);
$val = $statement4->execute(array());
}
catch(PDOException $e)
{
echo $e->getMessage();
return false;
}
$gamerType = $statement4->fetchAll(PDO::FETCH_ASSOC);
foreach($gamerType AS $game_types)
{
echo "<b>ID: </b>".$game_types['user_id']."<br /><b>Adventure/Story:</b> ".$game_types['adventure_story']."<br /><b>Arcade: </b>".$game_types['arcade'].' <br /><b>First Person Shooter:</b> '.$game_types['first_person_shooter']."<br /><b>Real Time Strategy:</b> ".$game_types['real_time_strategy']."<br /><b>Role Playing:</b> ".$game_types['role_playing']."<br /><br />";
}
$gameVideos = "SELECT * FROM game_videos";

$statement5 = $db->query($gameVideos);
try
{
$statement5 = $db->prepare($gameVideos);
$val = $statement5->execute(array());
}
catch(PDOException $e)
{
echo $e->getMessage();
return false;
}
$gamerVideos = $statement5->fetchAll(PDO::FETCH_ASSOC);
foreach($gamerVideos AS $game_videos)
{
echo "<b>Title: </b>".$game_videos['title']."<br /><b>Length:</b> ".$game_videos['length']."<br /><b>Level: </b>".$game_videos['level']."<br /><br />";
}
$sqlUsers = "SELECT * FROM users";

$statement6 = $db->query($sqlUsers);
try
{
$statement6 = $db->prepare($sqlUsers);
$val = $statement6->execute(array());
}
catch(PDOException $e)
{
echo $e->getMessage();
return false;
}
$gamerUsers = $statement6->fetchAll(PDO::FETCH_ASSOC);
foreach($gamerUsers AS $users)
{
echo "<b>User ID: </b>".$users['user_id']."<br /><b>Username:</b> ".$users['username']."<br /><b>Skype Name: </b>".$users['skype_name'].' <br /><b>Email:</b> '.$users['email']."<br /><b>Created On:</b> ".$users['create_date']."<br /><br />";
}
echo "<div style='background-color:beige;border:15px solid;border-color:black; text-align:center; font-family:fantasy;color:blue; width:400px; margin:auto;'>";
	echo "<form action='survey.php' method='post' name='survey' id='myForm' style='text-align:left;'>";
    echo "<br/>What is your favorite type of game?<br/>";
    echo "<input type='radio' name='game' value='Side Scroller'>Side Scroller (Super Mario Bros)<br/>";
    echo "<input type='radio' name='game' value='MMORPG'>MMORPG (Massive Multiplay Online Role Playing Game)<br/>";
    echo "<input type='radio' name='game' value='RTS'>RTS (Real Time Strategy)<br/>";
    echo "<input type='radio' name='game' value='RPG'>RPG (Role Playing Game)<br/>";
    echo "<br/>What is your favorite gaming company?<br/>";
    echo "<input type='radio' name='gameC' value='blizzard'>Blizzard<br/>";
    echo "<input type='radio' name='gameC' value='riot'>Riot<br/>";
    echo "<input type='radio' name='gameC' value='bungie'>Bungie<br/>";
    echo "<input type='radio' name='gameC' value='ea'>Electronic Arts<br/>";
    echo "<br/>What is your favorite type of gaming?<br/>";
    echo "<input type='radio' name='gameT' value='computer'>Computer<br/>";
    echo "<input type='radio' name='gameT' value='console'>Console<br/>";
    echo "<br/>How many hours a day do you game?<br/>";
    echo "<input type='radio' name='gameH' value='1'>Less than 1<br/>";
    echo "<input type='radio' name='gameH' value='1to3'>1-3<br/>";
    echo "<input type='radio' name='gameH' value='3to5'>3-5<br/>";
    echo "<input type='radio' name='gameH' value='5'>Greater than 5<br/>";
 echo"<p><a href = 'survey.php'><p id='style3'>View Results</b></a></p>";
  	echo"<input type='submit' name='submit' value='Submit'>"; 
	echo "<br/></div>";
echo "</body></html>";
?>​