<?php
session_start();

/*if ( (isset($_SESSION['game'])) ) {

//Already Voted

}
else {

//Process the Vote

}*/
// store session data
//$_SESSION['game'] = $_REQUEST['game'];
/*$_SESSION['game1'] = 0;
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
echo "Views=". $_SESSION['game3'];*/
?>

<html>
<body>

<?php
//retrieve session data
echo "The most popular types of games are:";
?><br/>

<?php
if(isset($_Session['game']))
echo "Side Scroller: ". $_SESSION['game'] = $_REQUEST['game'] +1;
else
$_SESSION['game'];
echo "Views=". $_SESSION['game'];

?><br/>
<?php
echo "MMORPG: ". $_SESSION['game1'] = $_REQUEST['game1'];
?><br/>
<?php
echo "RTS: ". $_SESSION['game2'] = $_REQUEST['game2'];
?><br/>
<?php
echo "RPG: ". $_SESSION['game3'] = $_REQUEST['game3'];
?>

<br>

</html>
</body>