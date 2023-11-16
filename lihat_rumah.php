<?php
require 'koneksi.php';

$search_location = isset($_GET['location']) ? $_GET['location'] : '';
$search_min_price = isset($_GET['min_price']) ? $_GET['min_price'] : null;
$search_max_price = isset($_GET['max_price']) ? $_GET['max_price'] : null;

$query = "SELECT * FROM tb_rumah WHERE 1";

if (!empty($search_location)) {
    $query .= " AND lokasi_rumah LIKE '%$search_location%'";
}

if (!empty($search_min_price)) {
    $query .= " AND harga_rumah >= $search_min_price";
}

if (!empty($search_max_price)) {
    $query .= " AND harga_rumah <= $search_max_price";
}

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
    <div class="logo">Logo</div>
    <div class="nav-links">
        <a href="lihat_rumah.php">Beranda</a>
        <a href="about.php">About Us</a>
        <?php
        session_start();
        if(isset($_SESSION['username'])){
            echo '<a href="aksi/logout.php">Logout</a>';
        } else {
            echo '<a href="login.php">Login</a>';
            echo '<a href="register.php">Register</a>';
        }
        ?>
    </div>
</div>

<div class="title-container">
    <h1>Dapatkan Rumah Impian Anda</h1>
    <p>Memiliki rumah impian bukan cuma mimpi! Pilihlah rumah Anda dari berbagai tren desain rumah masa kini dan jadikan kenyataan.</p>
</div>

<div class="search-container">
    <form action="lihat_rumah.php" method="get">
        <input type="text" name="location" id="location" placeholder="Lokasi" value="<?php echo $search_location; ?>">

        <input type="number" name="min_price" id="min_price" placeholder="Harga minimum" value="<?php echo $search_min_price; ?>">

        <input type="number" name="max_price" id="max_price" placeholder="Harga maksimum" value="<?php echo $search_max_price; ?>">

        <button type="submit"><b>Cari</b></button>
    </form>
</div>

<div class='container'>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='property'>";
        echo "<img src='foto_rumah/{$row['foto_rumah']}' alt='Rumah'>";
        echo "<p class='harga-lokasi'><span><b>Rp" . number_format($row['harga_rumah']) . "</b></span><span>{$row['lokasi_rumah']}</span></p>";
        echo "<p class='luas'><span>Luas tanah: {$row['luas_tanah']} m<sup>2</span><span>Luas rumah: {$row['luas_rumah']} m<sup>2</span></p>";
        echo "<a href='ulasan.php?id_rumah={$row['id_rumah']}' class='ulasan-button'>Ulasan</a>";
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

</body>
</html>
