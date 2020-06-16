<?php
	
	//Function tanpa parameter
	function jalan() {
		echo 'Mobil Jalan';
	}

	function berhenti() {
		echo 'Mobil Berhenti';
	}

	//Function dengan parameter
	function ganti_gigi($gigi) {
		echo 'Mobil ganti gigi ke '.$gigi;
	}

	function lari($kecepatan) {
		echo 'Mobil lari dengan kecepatan '.$kecepatan.' km/jam';
	}


	//Pemanggilan function
	echo "<br>";
	jalan();
	echo "<br>";
	berhenti();
	echo "<br>";
	echo "<br>";
	//Pemanggilan function
	ganti_gigi(3);
	echo "<br>";
	lari(70);
?>



