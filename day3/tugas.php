<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hr> TUGAS DAY 3 <hr>
	<p><b>KATAKAN CINTA</b></p>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <input type="text" name="name" placeholder="Siapa yang anda suka ?" required><br>
	  <input type="number" name="deep" placeholder="Seberapa dalam ?" required><br>
	  <button type="submit"> Katakan </button>
	</form><br>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    	
	    	$name = $_POST['name'];
	    	$deep = $_POST['deep'];

			if ($deep > 0) {
				echo "Name : $name | Deep : $deep <br><br>";
				for ($i=1; $i <= $deep ; $i++) { 
					echo "<p style='color:teal;line-height:1px;'>$i. Saya cinta <b>".$name."</b> !</p>";
				}
			}else{
				echo "Whoops..Seberapa dalam cinta anda ? ( Isi lebih dari 0)";
			}
		}

		?>
</body>
</html>