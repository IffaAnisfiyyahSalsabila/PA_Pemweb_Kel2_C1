<?php
require 'koneksi.php';

$query = "SELECT * FROM tb_rumah WHERE 1";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perumahan</title>
</head>
<body>

<div class="navbar">
    <div class="logo">ADMIN</div>
    <div class="nav-links">
        <a href="tambah_rumah.php">Tambah Rumah</a>
        <a href="admin_panel.php">Beranda</a>
        <a href="aksi/logout.php">Log out</a>
    </div>
</div>

<div class='container'>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='property'>";
        echo "<img src='foto_rumah/{$row['foto_rumah']}' alt='Rumah'>";
        echo "<p class='harga-lokasi'><span><b>Rp" . number_format($row['harga_rumah']) . "</b></span><span>{$row['lokasi_rumah']}</span></p>";
        echo "<p class='luas'><span>Luas tanah: {$row['luas_tanah']} m<sup>2</span><span>Luas rumah: {$row['luas_rumah']} m<sup>2</span></p>";
        echo "<button class='edit-button' onclick='editRumah({$row['id_rumah']})'>Edit</button>";
        echo "<button class='delete-button' onclick='hapusRumah({$row['id_rumah']})'>Hapus</button>";
        echo "</div>";
    }
    ?>
</div>


<!-- Footer -->
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

<script>
    function editRumah(id_rumah) {
        window.location.href = 'edit_rumah.php?property_id=' + id_rumah;
    }

    function hapusRumah(id_rumah) {
        var confirmDelete = confirm("Apakah Anda yakin ingin menghapus rumah ini?");
        if (confirmDelete) {
            window.location.href = 'aksi/hapus_rumah.php?id=' + id_rumah;
        }
    }
</script>

</body>
</html>
