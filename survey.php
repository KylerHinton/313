<?php
session_start();
// store session data
$_SESSION['game'] = 0;//$_REQUEST['game'];
$_SESSION['game1'] = 0;
$_SESSION['game2'] = 0;
$_SESSION['game3'] = 0;
if(isset($_SESSION['game']))
$_SESSION['game']=$_SESSION['game']+1;
else
$_SESSION['game']=1;
echo "Views=". $_SESSION['game'];
if(isset($_SESSION['game1']))
$_SESSION['game1']=$_SESSION['game1']+1;
else
$_SESSION['game1']=1;
echo "Views=". $_SESSION['game1'];
if(isset($_SESSION['views']))
$_SESSION['game2']=$_SESSION['game2']+1;
else
$_SESSION['game2']=1;
echo "Views=". $_SESSION['game2'];
if(isset($_SESSION['game3']))
$_SESSION['game3']=$_SESSION['game3']+1;
else
$_SESSION['game3']=1;
echo "Views=". $_SESSION['game3'];
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