<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hr> CALCULATOR <hr>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <input type="number" name="val1" placeholder="Angka" required>
	  <select name="operator" required>
	  	<option value="">Pilih Operator</option>
	  	<option value="+">+</option>
	  	<option value="-">-</option>
	  	<option value="*">*</option>
	  	<option value="/">/</option>
	  </select>
	  <input type="number" name="val2" placeholder="Angka" required>
	  <button type="submit"> Hitung</button>
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    	
	    	$val1 = $_POST['val1'];
	    	$val2 = $_POST['val2'];
	    	$operator = $_POST['operator'];
	    	$hasil = 0;

			if ($operator == "+") {
				$hasil = $val1 + $val2;
				echo "Angka ".$val1." ".$operator." Angka ".$val2." = Angka ".$hasil;
			}elseif ($operator == "-") {
				$hasil = $val1 - $val2;
				echo "Angka ".$val1." ".$operator." Angka ".$val2." = Angka ".$hasil;
			}elseif ($operator == "*") {
				$hasil = $val1 * $val2;
				echo "Angka ".$val1." ".$operator." Angka ".$val2." = Angka ".$hasil;
			}elseif ($operator == "/") {
				$hasil = $val1 / $val2;
				echo "Angka ".$val1." ".$operator." Angka ".$val2." = Angka ".$hasil;
			}else{
				echo "<p style='color:red;'>Whops, this operator is undefined !</p>";
			}
		}

		?>
</body>
</html>