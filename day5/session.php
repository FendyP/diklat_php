<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
</head>
<body>
<a href="get_session.php">GET SESSION</a><br><br>
<?php
$_SESSION["color"] = 'green';
$_SESSION["animal"] = 'green';

echo "Session variable are set.";
?>
</body>
</html>