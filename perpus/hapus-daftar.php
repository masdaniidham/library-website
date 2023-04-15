<?php
	include 'koneksi.php';

	// Ambil id buku dari parameter URL
	$id = $_GET['id'];

	// Query untuk menghapus buku dari database
	$sql = "DELETE FROM buku WHERE id=$id";
	if (mysqli_query($koneksi, $sql)) {
		echo "Buku berhasil dihapus.";
	} else {
		echo "Terjadi kesalahan: " . mysqli_error($koneksi);
	}

	// Redirect kembali ke halaman daftar buku
	header("Location: daftar.php");
	exit();
?>