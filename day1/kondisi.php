<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hr> KONDISI <hr>

	<?php
		$d = date('D');

		if ($d == "Fri") {
			echo "Have a nice weekend : ".$d;
		}elseif ($d == "Wed") {
			echo "Today is Wednesday";
		}else{
			echo "Have a nice day : ".$d;
		}

		?>
</body>
</html>