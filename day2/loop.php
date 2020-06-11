<?php
echo "<hr> LOOP <hr>";
echo "<hr> FOR <hr>";
$a = 0;
$b = 0;

for ($i=0; $i < 5 ; $i++) { 
	$a += 10;
	$b += 5;
}
var_dump($i);
echo "i = ".$i;

echo "<hr> WHILE <hr>";

$i = 0;
$num = 50;
$a = 10;
while ($i < 10) {
	$num--;
	$i++;
	$a += 10;
}

echo "Hasil Akhir i = ".$i." num = ".$num.", a = ".$a;

echo "<hr> DO WHILE <hr>";

$i=5;
$a=0;
do {
	$i++;
	$a += 10;
	echo $i." ";
} while ( $i < 10);
echo "<br>Nilai i adalah ".$i." dan nilai a adalah ".$a;

echo "<hr>FOREACH <hr>";

$arr = array(1,2,3,4,5);
$lenghtArr = count($arr);
echo "Panjang Array : ".$lenghtArr."<br>";

foreach ($arr as $val) {
	echo "Value = ".$val.", ";
}

echo "<br>";

for ($i=0; $i<$lenghtArr ; $i++) { 
	echo "value for = ".$arr[$i].", ";
}

$arr = array(1,2,3,4,5);
$lenghtArr = count($arr);
foreach ($arr as $val) {
	if ($val == 4) {
		// break;
		continue;
	}
}

echo "<br>";
?>