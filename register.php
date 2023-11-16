<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perumahan</title>
</head>
<body>

<div class="navbar" style='justify-content: center'>
  <div class="logo">Logo</div>
</div>

<div class="login-container">
    <h2>Register</h2>
    <form action="aksi/register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="rpassword" name="password" required>

        <button type="submit">Register</button>
    </form>

    <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
</div>

</body>
</html>
