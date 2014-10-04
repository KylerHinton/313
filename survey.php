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
// Set session variables
//$_SESSION["game"] = 0;
//$_SESSION["game1"] = 0;
//$_SESSION["game2"] = 0;
//$_SESSION["game3"] = 0;



?>
<?php
  if($_POST['submit'] == "Submit") 
  {
    $varGame = $_POST['game'];
    $varName = $_POST['survey'];
   // $number = $_SESSION['game'];
    if(isset($_SESSION['game']))
    $_SESSION['game']=$_SESSION['game']+1;
    else
    $_SESSION['game']=0;
    echo "Views=". $_SESSION['game'];
    if(isset($_SESSION['game1']))
    $_SESSION['game1']=$_SESSION['game1']+1;
    else
    $_SESSION['game1']=0;
    echo "Views=". $_SESSION['game1'];
    if(isset($_SESSION['views']))
    $_SESSION['game2']=$_SESSION['game2']+1;
    else
    $_SESSION['game2']=0;
    echo "Views=". $_SESSION['game2'];
    if(isset($_SESSION['game3']))
    $_SESSION['game3']=$_SESSION['game3']+1;
    else
    $_SESSION['game3']=0;
    echo "Views=". $_SESSION['game3'];
  }
?>
<?php
//echo "You selected: ". $_SESSION['game'] = $_REQUEST['game'];
//echo "Thank you for your response!";
?><br/>

<?php
//retrieve session data
echo "The most popular types of games are:";
?><br/>

<?php
echo "Side Scroller: ". $_SESSION['game'];// = $_REQUEST['game'];
?><br/>
<?php
	if(!empty($_POST['game'])) {
		foreach($_POST['game'] as $check) {
			echo $check; ?>
			<br>
			<?php
		}
	}
?>
<?php
echo "MMORPG: ". $_SESSION['game'];// = $_REQUEST['game'];
?><br/>
<?php
echo "RTS: ". $_SESSION['game'];// = $_REQUEST['game'];
?><br/>
<?php
echo "RPG: ". $_SESSION['game'];// = $_REQUEST['game'];
?>

<br>
<?php
if($errorMessage != "") 
{
  echo("<p>There was an error:</p>\n");
  echo("<ul>" . $errorMessage . "</ul>\n");
} 
else
{
  $fs = fopen("mydata.csv","a");
  fwrite($fs,$varName . ", " . $varGame . "\n");
  fclose($fs);
 
  exit;
}
?>

</html>
</body>