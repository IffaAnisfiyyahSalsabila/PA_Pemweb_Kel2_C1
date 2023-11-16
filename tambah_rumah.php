<?php
require 'aksi/tambah_rumah.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
    </style>
    <title>Tambah Rumah</title>
</head>
<body>

<div class="navbar">
    <div class="logo">ADMIN</div>
    <div class="nav-links">
        <a href="tambah_rumah.php">Tambah Rumah</a>
        <a href="cari_rumah.php">Cari Rumah</a>
        <a href="admin_panel.php">Lihat Rumah</a>
        <a href="aksi/logout.php">Log out</a>
    </div>
</div>

<div class="container">
    <div class="tambah-rumah-form">
        <h2>Tambah Rumah</h2>
        <form method="POST" action="" enctype="multipart/form-data">
            <label for="lokasi_rumah">Lokasi Rumah:</label>
            <input type="text" name="lokasi_rumah" required>

            <label for="harga_rumah">Harga Rumah:</label>
            <input type="text" name="harga_rumah" required>

            <label for="foto_rumah">Foto Rumah:</label>
            <input type="file" name="foto_rumah" accept="image/*" required>

            <button type="submit">Tambahkan</button>
        </form>
    </div>
</div>

<footer>
    <div class=footer-contact>
      <div class="footer-left">
          <p>Telepon: (123) 456-7890</p>
          <p>Email: info@example.com</p>
      </div>
      <div class="footer-right">
          <a href="#"><img src="icons/facebook-icon.png" alt="Facebook"></a>
          <a href="#"><img src="icons/x-icon.png" alt="Twitter"></a>
          <a href="#"><img src="icons/instagram-icon.png" alt="Instagram"></a>
      </div>
    </div>
    <div class="footer-copyright">
        <p>&copy; 2023 Kelompok 2. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
