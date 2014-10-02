<?php
session_start();
// store session data
$_SESSION['game'];
?>
<html>
<body>


<?php
//retrieve session data
echo "The most popular types of games are:". $_SESSION['game'];
echo "Side Scroller". $_SESSION['game'];
echo "MMORPG". $_SESSION['game'];
echo "RTS". $_SESSION['game'];
echo "RPG". $_SESSION['game'];
?>
<?php
	echo $_POST["game"];
?>

<br>

</html>
</body>