<?php
session_start();
// store session data
$_SESSION['game']=1;
$_SESSION['game1']=1;
$_SESSION['game2']=1;
$_SESSION['game3']=1;
?>
<html>
<body>


<?php
//retrieve session data
echo "The most popular types of games are:";
?><br/>
<?php
echo "Side Scroller: ". $_SESSION['game'] +1;
?><br/>
<?php
echo "MMORPG: ". $_SESSION['game1']+1;
?><br/>
<?php
echo "RTS: ". $_SESSION['game2']+1;
?><br/>
<?php
echo "RPG: ". $_SESSION['game3']+1;
?>

<br>

</html>
</body>