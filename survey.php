<?php
session_start();
// store session data
$_SESSION['game'] = $_REQUEST['survey'];
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
echo "MMORPG: ". $_SESSION['game'];
?><br/>
<?php
echo "RTS: ". $_SESSION['game'];
?><br/>
<?php
echo "RPG: ". $_SESSION['game'];
?>

<br>

</html>
</body>