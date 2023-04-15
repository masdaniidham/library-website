<?php
	$host = "localhost"; //nama host
	$user = "root"; //username database
	$pass = ""; //password database
	$db   = "db_perpustakaan"; //nama database

	// Membuat koneksi ke database
	$koneksi = mysqli_connect($host, $user, $pass, $db);

	// Cek koneksi
	if (mysqli_connect_errno()) {
		echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
		exit();
	}
?>