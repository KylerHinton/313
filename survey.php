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
echo "Side Scroller: ". $_SESSION['survey'];
?><br/>
<?php
echo "MMORPG: ". $_SESSION['survey'];
?><br/>
<?php
echo "RTS: ". $_SESSION['survey'];
?><br/>
<?php
echo "RPG: ". $_SESSION['survey'];
?>

<br>

</html>
</body>