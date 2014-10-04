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
  $vote = $_REQUEST['game'];
  $vote2 = $_REQUEST['gameC'];
  $vote3 = $_REQUEST['gameT'];
  $vote4 = $_REQUEST['gameH'];

  if($_POST['submit'] == "Submit") 
  {
  if ($vote == 'Side Scroller')
  {
    $ssVote = $ssVote;
    $_SESSION['$ssVote'] = $_SESSION['$ssVote'] +1;
  }
    if ($vote == 'MMORPG')
  {
    $mmoVote = $mmoVote;
    $_SESSION['$mmoVote'] = $_SESSION['$mmoVote'] +1;
  }
    if ($vote == 'RTS')
  {
    $rtsVote = $rtsVote;
    $_SESSION['$rtsVote'] = $_SESSION['$rtsVote'] +1;
  }
    if ($vote == 'RPG')
  {
    $rpgVote = $rpgVote;
    $_SESSION['$rpgVote'] = $_SESSION['$rpgVote'] +1;
  }
    if ($vote2 == 'blizzard')
  {
    $blizzVote = $blizzVote;
    $_SESSION['$blizzVote'] = $_SESSION['$blizzVote'] +1;
  }
    if ($vote2 == 'riot')
  {
    $riotVote = $riotVote;
    $_SESSION['$riotVote'] = $_SESSION['$riotVote'] +1;
  }
    if ($vote2 == 'bungie')
  {
    $bungieVote = $bungieVote;
    $_SESSION['$bungieVote'] = $_SESSION['$bungieVote'] +1;
  }
    if ($vote2 == 'ea')
  {
    $eaVote = $eaVote;
    $_SESSION['$eaVote'] = $_SESSION['$eaVote'] +1;
  }
    if ($vote3 == 'computer')
  {
    $compVote = $compVote;
    $_SESSION['$compVote'] = $_SESSION['$compVote'] +1;
  }
    if ($vote3 == 'console')
  {
    $conVote = $conVote;
    $_SESSION['$conVote'] = $_SESSION['$conVote'] +1;
  }
  if ($vote4 == '1')
  {
    $oneVote = $oneVote;
    $_SESSION['$oneVote'] = $_SESSION['$oneVote'] +1;
  }
    if ($vote4 == '1to3')
  {
    $twoVote = $twoVote;
    $_SESSION['$twoVote'] = $_SESSION['$twoVote'] +1;
  }
    if ($vote4 == '3to5')
  {
    $threeVote = $threeVote;
    $_SESSION['$threeVote'] = $_SESSION['$threeVote'] +1;
  }
    if ($vote4 == '5')
  {
    $fourVote = $fourVote;
    $_SESSION['$fourVote'] = $_SESSION['$fourVote'] +1;
  }

  /*  echo "The most popular types of games are:";
    echo nl2br("\n");

    
    echo "Side Scroller: ". $_SESSION['$ssVote'];//$ssVote;//. $_SESSION['game'].$ssVote;// = $_REQUEST['game'];
    echo nl2br("\n");

    
    echo "MMORPG: ". $_SESSION['$mmoVote'];// $mmoVote;//. $_SESSION['game'];// = $_REQUEST['game'];
    echo nl2br("\n");
    
    echo "RTS: ". $_SESSION['$rtsVote'];//$rtsVote;//. $_SESSION['game'];// = $_REQUEST['game'];
    echo nl2br("\n");
    
    echo "RPG: ". $_SESSION['$rpgVote'];//$rpgVote;//. $_SESSION['game'];// = $_REQUEST['game'];
   */ $varGame = $_POST['game'];
    $varName = $_POST['survey'];
   // $number = $_SESSION['game'];
  /*  if(isset($_SESSION['game']))
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
*/
  }
?>
<?php
//echo "You selected: ". $_SESSION['game'] = $_REQUEST['game'];
//echo "Thank you for your response!";
?>

<?php
//retrieve session data
echo "The most popular types of games are:";
?><br/>

<?php
if($_SESSION['$ssVote'] >= 1)
echo "Side Scroller: ". $_SESSION['$ssVote'];//$ssVote//. $_SESSION['game'].$ssVote;// = $_REQUEST['game'];
else
echo "Side Scroller: 0";
?><br/>

<?php
if($_SESSION['$mmoVote'] >= 1)
echo "MMORPG: ". $_SESSION['$mmoVote'];//$mmoVote//. $_SESSION['game'];// = $_REQUEST['game'];
else
echo "MMORPG: 0"
?><br/>
<?php
if($_SESSION['$rtsVote'] >= 1)
echo "RTS: ". $_SESSION['$rtsVote'];//$rtsVote//. $_SESSION['game'];// = $_REQUEST['game'];
else
echo "RTS: 0"
?><br/>
<?php
if($_SESSION['$rpgVote'] >= 1)
echo "RPG: ". $_SESSION['$rpgVote'];//$rpgVote//. $_SESSION['game'];// = $_REQUEST['game'];
else
  echo "RPG: 0"
?><br/><br/>
<?php
echo "The favorite gaming companies are:";
?><br/>
<?php
if($_SESSION['$blizzVote'] >= 1)
echo "Blizzard: ". $_SESSION['$blizzVote'];//$ssVote//. $_SESSION['game'].$ssVote;// = $_REQUEST['game'];
else
echo "Blizzard: 0";
?><br/>

<?php
if($_SESSION['$riotVote'] >= 1)
echo "Riot: ". $_SESSION['$riotVote'];//$mmoVote//. $_SESSION['game'];// = $_REQUEST['game'];
else
echo "Riot: 0"
?><br/>
<?php
if($_SESSION['$bungieVote'] >= 1)
echo "Bungie: ". $_SESSION['$bungieVote'];//$rtsVote//. $_SESSION['game'];// = $_REQUEST['game'];
else
echo "Bungie: 0"
?><br/>
<?php
if($_SESSION['$eaVote'] >= 1)
echo "Electronic Arts: ". $_SESSION['$eaVote'];//$rpgVote//. $_SESSION['game'];// = $_REQUEST['game'];
else
  echo "Electronic Arts: 0"
?><br/><br/>
<?php
echo "The favorite types of gaming are:";
?><br/>
<?php
if($_SESSION['$compVote'] >= 1)
echo "Computer: ". $_SESSION['$compVote'];//$ssVote//. $_SESSION['game'].$ssVote;// = $_REQUEST['game'];
else
echo "Computer: 0";
?><br/>

<?php
if($_SESSION['$conVote'] >= 1)
echo "Console: ". $_SESSION['$conVote'];//$mmoVote//. $_SESSION['game'];// = $_REQUEST['game'];
else
echo "Console: 0"
?><br/><br/>
<?php
echo "The hours a day that are spent gaming:";
?><br/>
<?php
if($_SESSION['$oneVote'] >= 1)
echo "Less than 1: ". $_SESSION['$oneVote'];//$ssVote//. $_SESSION['game'].$ssVote;// = $_REQUEST['game'];
else
echo "Less than 1: 0";
?><br/>

<?php
if($_SESSION['$twoVote'] >= 1)
echo "1-3: ". $_SESSION['$twoVote'];//$mmoVote//. $_SESSION['game'];// = $_REQUEST['game'];
else
echo "1-3: 0"
?><br/>
<?php
if($_SESSION['$threeVote'] >= 1)
echo "3-5: ". $_SESSION['$threeVote'];//$rtsVote//. $_SESSION['game'];// = $_REQUEST['game'];
else
echo "3-5: 0"
?><br/>
<?php
if($_SESSION['$fourVote'] >= 1)
echo "Greater than 5: ". $_SESSION['$fourVote'];//$rpgVote//. $_SESSION['game'];// = $_REQUEST['game'];
else
  echo "Greater than 5: 0"
?>
<br/><br/>
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