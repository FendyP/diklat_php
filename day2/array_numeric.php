<?php
echo "<hr> ARRAY NUMERIC <hr>";

$data = [1,2,3,4,5,'budi','joni'];

foreach ($data as $key => $value) {
	echo "value index ke ".$key." = ".$value."<br>";
}

echo "<br>";

$no[0] = 'satu';
$no[1] = 'dua';
$no[2] = 'tiga';
array_push($no, 'empat');
array_push($no, 'lima');

foreach ($no as $key => $value) {
	echo "value index ke ".$key." = ".$value."<br>";
}
?>