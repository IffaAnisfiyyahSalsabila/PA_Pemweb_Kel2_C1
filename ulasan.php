<?php
require 'koneksi.php';

session_start();

$id_rumah = isset($_GET['id_rumah']) ? $_GET['id_rumah'] : null;

if (!$id_rumah) {
    echo "ID Rumah tidak valid!";
    exit;
}

$query = "SELECT * FROM tb_ulasan WHERE id_rumah = $id_rumah";
$result = mysqli_query($conn, $query);

$ulasan = [];

while ($row = mysqli_fetch_assoc($result)) {
    $ulasan[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ulasan Rumah</title>

    <style>
      .ulasan-container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .ulasan-container h1 {
        color: #333;
        text-align: center;
      }

      .ulasan-item {
        margin-bottom: 20px;
        border-bottom: 1px solid #ccc;
        padding-bottom: 20px;
      }

      .ulasan-item p {
        margin: 0;
      }

      .ulasan-form {
        margin-top: 20px;
      }

      .ulasan-form label {
        display: block;
        margin-bottom: 8px;
      }

      .ulasan-form textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
      }

      .ulasan-form button {
        background-color: #333;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
    </style>
</head>
<body>

<div class="navbar">
    <div class="logo">Logo</div>
    <div class="nav-links">
        <a href="lihat_rumah.php">Beranda</a>
        <a href="about.php">About Us</a>
        <?php
        if(isset($_SESSION['username'])){
            echo '<a href="aksi/logout.php">Logout</a>';
        } else {
            echo '<a href="login.php">Login</a>';
            echo '<a href="register.php">Register</a>';
        }
        ?>
    </div>
</div>

<div class="ulasan-container">
  <h1>Ulasan Rumah</h1>

  <!-- Tampilkan ulasan -->
  <?php foreach ($ulasan as $review) : ?>
      <div class="ulasan-item">
          <p><strong>Username:</strong> <?php echo $review['username']; ?></p>
          <p><strong>Isi Ulasan:</strong> <?php echo $review['isi_ulasan']; ?></p>
      </div>
  <?php endforeach; ?>

  <!-- Form untuk menambah ulasan (optional) -->
  <form class="ulasan-form" action="aksi/ulasan.php" method="post">
      <label for="isi_ulasan">Isi Ulasan:</label>
      <textarea name="isi_ulasan" rows="4" required></textarea>

      <!-- Tambahan input untuk id_rumah (dapat diberikan secara tersembunyi atau disertakan sebagai parameter di URL) -->
      <input type="hidden" name="id_rumah" value="<?php echo $_GET['id_rumah']; ?>">

      <button type="submit">Submit Ulasan</button>
  </form>
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
