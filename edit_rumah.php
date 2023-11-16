<?php
require 'koneksi.php';

if (isset($_GET['property_id'])) {
    $propertyId = $_GET['property_id'];

    $query = "SELECT * FROM tb_rumah WHERE id_rumah = '$propertyId'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $propertyData = mysqli_fetch_assoc($result);
    } else {
        echo "Property not found.";
        exit;
    }
} else {
    echo "No property ID provided.";
    exit;
}
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
    <title>Tambah Rumah</title></head>
<body>

<div class="navbar">
    <div class="logo">ADMIN</div>
    <div class="nav-links">
        <a href="tambah_rumah.php">Tambah Rumah</a>
        <a href="admin_panel.php">Beranda</a>
        <a href="aksi/logout.php">Log out</a>
    </div>
</div>

<div class="container">
    <div class="tambah-rumah-form">
        <h2>Edit Rumah</h2>
        <form method="POST" action="aksi/edit_rumah.php" enctype="multipart/form-data">
            <input type="hidden" name="property_id" value="<?php echo $propertyData['id_rumah']; ?>">

            <label for="new_lokasi_rumah">Lokasi Rumah:</label>
            <input type="text" name="new_lokasi_rumah" value="<?php echo $propertyData['lokasi_rumah']; ?>" required>

            <label for="new_harga_rumah">Harga Rumah:</label>
            <input type="text" name="new_harga_rumah" value="<?php echo $propertyData['harga_rumah']; ?>" required>

            <label for="new_foto_rumah">Foto Rumah:</label>
            <input type="file" name="new_foto_rumah" accept="image/*">

            <button type="submit">Update</button>
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
