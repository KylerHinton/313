<?php
session_start();
// store session data
$_SESSION['game'] = 0; //$_REQUEST['game'];
?>
<?php
setcookie("game", "game", time()+3600);
?>
<html>
<body>

<?php
// Print a cookie
echo $_COOKIE["game"];

// A way to view all cookies
//print_r($_COOKIE);
?>
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