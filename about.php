<!-- about.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>About Us</title>
</head>
<body>

<div class="navbar">
    <div class="logo">Logo</div>
    <div class="nav-links">
        <!-- <input type="text" placeholder="Cari rumah"> -->
        <a href="lihat_rumah.php">Beranda</a>
        <a href="about.php">About Us</a>
        <?php
        session_start();
        if(isset($_SESSION['username'])){
            echo '<a href="logout.php">Logout</a>';
        } else {
            echo '<a href="login.php">Login</a>';
            echo '<a href="register.php">Register</a>';
        }
        ?>
    </div>
</div>

<div class="about-us-container">
    <h1>Tentang Kami</h1>
    <p>Selamat datang di Perusahaan Jual Rumah, di mana rumah impian Anda menjadi kenyataan. Perusahaan kami didirikan dengan visi untuk memberikan layanan properti berkualitas tinggi dan membantu individu serta keluarga menemukan rumah ideal mereka.</p>

    <h2>Sejarah Kami</h2>
    <p>Dibentuk pada tahun [tahun], Perusahaan Jual Rumah telah menjadi pemain kunci dalam industri properti. Kami memulai dengan semangat untuk menghubungkan orang dengan rumah impian mereka, dan perjalanan kami ditandai dengan kemitraan yang sukses dan klien yang puas.</p>

    <h2>Nilai-Nilai Kami</h2>
    <p>Perusahaan Jual Rumah dibangun di atas nilai-nilai yang memandu setiap tindakan kami. Kami percaya pada:</p>
    <ul>
        <li>1. Profesionalisme</li>
        <li>2. Integritas</li>
        <li>3. Fokus pada Pelanggan</li>
        <li>4. Peningkatan Terus-Menerus</li>
    </ul>

    <h2>Komitmen kepada Pelanggan</h2>
    <p>Komitmen kami adalah untuk memprioritaskan kepuasan pelanggan. Kami bekerja sama dengan erat dengan klien kami, memahami kebutuhan dan preferensi mereka untuk memastikan mereka menemukan properti yang sempurna sesuai harapan mereka.</p>

    <h2>Hubungi Kami</h2>
    <p>Kami di sini untuk membantu Anda dalam perjalanan properti Anda. Hubungi kami hari ini:</p>
    <ul>
        <li>Alamat: Jalan Pramuka</li>
        <li>Telepon: +62213861239</li>
        <li>Email: rumah_indah@gmail.com</li>
    </ul>
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
