<?php
echo "<hr> ARRAY MULTIDIMESIONAL <hr>";

$nilai = [
			'TONO' => [
				'MATEMATIKA' => 90,
				'FISIKA' => 87,
				'BIOLOGI' => 43,
				],
			'BUDI' => [
				'MATEMATIKA' => 80,
				'FISIKA' => 87,
				'BIOLOGI' => 43,
				],
			'JONI' => [
				'MATEMATIKA' => 50,
				'FISIKA' => 87,
				'BIOLOGI' => 43,
				],

		];

echo "Nilai joni = ".$nilai['JONI']['MATEMATIKA']."<br><br>";


echo "Akses pake Foreach<br>";
foreach ($nilai as $key => $value) {
	foreach ($value as $k => $v) {
		echo "Nilai ".$k." = ".$v."<br>";
	}
	echo "<br>";
}


?>