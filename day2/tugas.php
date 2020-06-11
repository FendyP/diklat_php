<?php
echo "<hr> TUGAS DAY 2 <hr>";

echo "<pre>
1. siswa budi memiliki nilai matematika 70, bhs indonesia 80, bhs inggris 90
2. siswa tono memiliki nilai matematika 60, bhs indonesia 70, bhs inggris 80
3. siswa gadis memiliki nilai matematika 55, bhs indonesia 75, bhs inggris 95

tampilkan nilai matematika yang nilainya >= 60
</pre>";
echo "<hr>";

$nilai = [
			'BUDI' => [
				'MATEMATIKA' => 70,
				'BHS_INDONESIA' => 80,
				'BHS_INGGRIS' => 90,
				],
			'TONO' => [
				'MATEMATIKA' => 60,
				'BHS_INDONESIA' => 70,
				'BHS_INGGRIS' => 80,
				],
			'GADIS' => [
				'MATEMATIKA' => 55,
				'BHS_INDONESIA' => 75,
				'BHS_INGGRIS' => 95,
				],

		];

echo "TAMPILKAN NILAI MATEMATIKA YG NILAINYA >= 60 <br>";

foreach ($nilai as $key => $value) {
	foreach ($value as $k => $v) {
		if ($k == 'MATEMATIKA' && $v >= 60) {
			echo "Nama ".$key."<br>";
			echo "Nilai ".$k." = ".$v."<br>";
		}		
	}
	echo "<br>";
}

?>