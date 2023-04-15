<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan Online - Input Buku Baru</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
      <h1>EnRuSe Library</h1>
      <nav>
        <ul>
          <li><h3><a href="index.php">Beranda</a></h3></li>
          <li><a href="tambah.php">Tambah Buku</a></li>
          <li><a href="daftar.php">Daftar Buku</a></li>
          <li><a href="hapus.php">Hapus Buku</a></li>

        </ul>
      </nav>
    </header>

	<div class="container">
		<h1>Input Buku Baru</h1>
		<form method="post" action="tambah.php">
			<label>Judul Buku:</label>
			<input type="text" name="judul">
			<br>
			<label>Penulis:</label>
			<input type="text" name="pengarang">
			<br>
			<label>Penerbit:</label>
			<input type="text" name="penerbit">
			<br>
			<label>Tahun Terbit:</label>
			<input type="text" name="tahun">
			<br>
			<input type="submit" name="submit" value="Tambahkan">
		</form>

		<?php
			include 'koneksi.php';
			if (isset($_POST['submit'])) {
				$judul = $_POST['judul'];
				$penulis = $_POST['pengarang'];
				$penerbit = $_POST['penerbit'];
				$tahun = $_POST['tahun'];
				$sql = "INSERT INTO buku (judul, pengarang, penerbit,tahun) VALUES ('$judul', '$penulis', '$penerbit','$tahun')";
				if (mysqli_query($koneksi, $sql)) {
					echo "<p>Buku berhasil ditambahkan ke database.</p>";
				} else {
					echo "<p>Gagal menambahkan buku: " . mysqli_error($koneksi) . "</p>";
				}
			}
		?>
	</div>
	<a href="index.php"><button type="button">Kembali ke Halaman Utama</button></a>
</body>
</html>