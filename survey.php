<?php
session_start();
// store session data
$_SESSION['views']=1;
?>
<html>
<body>


<?php
//retrieve session data
echo "Pageviews=". $_SESSION['views'];
?>
<?php
	echo $_POST["game"];
?>

<br>

</html>
</body>