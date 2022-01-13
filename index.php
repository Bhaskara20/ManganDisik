<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
   <div class="overlay"></div>
   <form action="simpan_register.php" method="POST" class="box">
       <div class="header">
           <h4>Selamat Datang di Mangan Disik</h4>
           <p>Silahkan registrasi bagi yang belum memiliki akses, dan login untuk yang memiliki akses</p>
       </div>
       <div class="login-area">
           <input type="text" class="username" name ="username" placeholder="Username">
           <input type="password" class="password" name="password" placeholder="Password">
           <input type="text" class="namalengkap" name="nama_lengkap" placeholder="Nama Lengkap">
           <select id="sts" class="form-control" name="status">
            <option selected>Status Registrasi</option>
            <option value="Barista">Barista</option>
            <option value="Juru Masak">Juru Masak</option>
            <option value="Kasir">Kasir</option>
            <option value="Customer">Customer</option>
            <option value="Admin">Admin</option>
           </select>
           <button type="register" class="submit">Register</button>
           <a href="opsi2.php">Sudah Punya Akun?Login</a>
       </div>
   </form> 
</body>
</html>