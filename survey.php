<?php
session_start();
// store session data
$_SESSION['game'];
$_SESSION['game1'];
$_SESSION['game2'];
$_SESSION['game3'];
?>
<html>
<body>


<?php
//retrieve session data
echo "The most popular types of games are:";
?><br/>
<?php
echo "Side Scroller: ". $_SESSION['game'];
?><br/>
<?php
echo "MMORPG: ". $_SESSION['game1'];
?><br/>
<?php
echo "RTS: ". $_SESSION['game2'];
?><br/>
<?php
echo "RPG: ". $_SESSION['game3'];
?>

<br>

</html>
</body>