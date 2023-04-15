<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan Online - Daftar Buku</title>
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
		<h1>Daftar Buku</h1>
		<?php
			include 'koneksi.php';
			$sql = "SELECT * FROM buku";
			$result = mysqli_query($koneksi, $sql);
			if (mysqli_num_rows($result) > 0) {
				echo "<table>";
				echo "<tr><th>ID</th><th>Judul</th><th>Penulis</th><th>Penerbit</th><th>Tahun Terbit</th></tr>";
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr><td>" . $row['id'] . "</td><td>" . $row['judul'] . "</td><td>" . $row['pengarang'] . "</td><td>" . $row['penerbit'] . "</td><td>" . $row['tahun'] . "</td></tr>";
				}
				echo "</table>";
			} else {
				echo "<p>Belum ada buku yang ditambahkan.</p>";
			}
		?>
		<a href="index.php"><button type="button">Kembali ke Halaman Utama</button></a>
	</div>
</body>
</html>