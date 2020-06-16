<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Get Session</title>
</head>
<body>
<a href="session.php">SET SESSION</a><br><br>
<?php
$_SESSION["color"] = 'green';
$_SESSION["animal"] = 'sapi';

echo "Favorite color is ".$_SESSION["color"]."<br>";
echo "Favorite color is ".$_SESSION["animal"]."<br>";
?>
</body>
</html>