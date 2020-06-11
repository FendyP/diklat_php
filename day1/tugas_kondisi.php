<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hr> TUGAS KONDISI <hr>
	
	<pre>
		SOAL :
		Grade < 60 = Tidak Lulus
		Grade 60 sd 69 = C
		Grade 70 sd 79 = B
		Grade 80 sd 100 = A

		JAWABAN :
		if ($grade >= 80 && $grade <= 100) {
			echo "A";
		}elseif ($grade >= 70 && $grade <= 79) {
			echo "B";
		}elseif ($grade >= 60 && $grade <= 69) {
			echo "C";
		}elseif ($grade <= 60) {
			echo "Tidak Lulus";
		}else{
			echo "Whops, this value (".$grade.") isn't in range !";
		}
	</pre>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <input type="number" name="grade" placeholder="Masukkan Grade" required>
	  <input type="submit">
	</form>

	<?php
		// $grade = 101;
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    	
	    	$grade = $_POST['grade'];

			if ($grade >= 80 && $grade <= 100) {
				echo "A";
			}elseif ($grade >= 70 && $grade <= 79) {
				echo "B";
			}elseif ($grade >= 60 && $grade <= 69) {
				echo "C";
			}elseif ($grade <= 60) {
				echo "Tidak Lulus";
			}else{
				echo "<p style='color:red;'>Whops, this value (".$grade.") isn't in range ( 0 - 100 ) !</p>";
			}
		}

		?>
</body>
</html>