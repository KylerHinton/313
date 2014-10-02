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
?>
<?php
	echo $_POST["game"];
?>

<br>

</html>
</body>