<?php
echo "<hr> ARRAY ASSOCIATIVE <hr>";

$gaji = [
		'budi' => 200000,
		'tono' => 130000,
		'joni' => 300000,
		];

echo "gaji budi = ".$gaji['budi']."<br>";
echo "gaji tono = ".$gaji['tono']."<br>";
echo "gaji joni = ".$gaji['joni']."<br><br>";


echo "Akses pake Foreach<br>";
foreach ($gaji as $key => $value) {
	echo "Gaji ".$key." = ".$value."<br>";
}

echo "<br>";

?>