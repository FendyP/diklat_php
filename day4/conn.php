<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "phpfundamental";

	$conn = mysqli_connect($host, $username, $password, $database);

	if (!$conn) {
		die("Gagal terhubung ke database : ".mysqli_connect_error());
	}else{
		// echo "berhasil";
	}
?>