<?php
	
	// function return value
	function pengurangan($a, $b) {
		$c = $a-$b;
		return 'Hasil pegurangan '.$a.' dan '.$b.' adalah '.$c;
	}

	function perkalian($a, $b) {
		$c = $a*$b;
		return 'Hasil perkalian '.$a.' dan '.$b.' adalah '.$c;
	}

	function pembagian($a, $b) {
		$c = $a/$b;
		return 'Hasil pembagian '.$a.' dan '.$b.' adalah '.$c;
	}

	//function default value
	function penjumlahan($a=1, $b=5) {
		$c = $a+$b;
		return 'Hasil penjumlahan '.$a.' dan '.$b.' adalah '.$c;
	}

	function shift_up($gigi = 'N'){
	if($gigi == 'N') $gigi = 1;
	else $gigi = $gigi +1;
	return $gigi;
	}


	$x =50;
	$y =10;
	$hasil = pengurangan($x,$y);
	echo $hasil;
	echo '<br>';

	//

	$math = penjumlahan();
	$rs = shift_up(2);
	echo $math;
	echo '<br>';
	echo $rs;

?>

