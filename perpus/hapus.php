<?php
// Mengambil koneksi ke database dari file koneksi.php
require_once 'koneksi.php';

// Cek apakah parameter id_buku dikirim dari form
if (isset($_POST['id'])) {
  // Mengambil nilai id_buku dari form
  $id = $_POST['id'];

  // Query SQL untuk menghapus row dengan id_buku tertentu dari tabel buku
  $query = "DELETE FROM buku WHERE id = $id";

  // Menjalankan query untuk menghapus row dari tabel buku
  $result = mysqli_query($koneksi, $query);

  // Jika query berhasil dijalankan
  if ($result) {
    echo "<p>Row dengan id $id berhasil dihapus dari tabel buku.</p>";
  } else {
    echo "<p>Gagal menghapus row dengan id $id dari tabel buku.</p>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hapus Buku Dari Database</title>
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
    <h2>Hapus Buku</h2>
<form method="POST" action="">
  <label for="id">ID Buku:</label>
  <input type="text" name="id" id="id" required>
  <br><br>
  <button type="submit" name="submit">Hapus</button>

  	<a href="index.php"><button type="button">Kembali ke Halaman Utama</button></a>

</form>
</body>
</html>
