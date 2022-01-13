<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
   <div class="overlay"></div>
   <form action="opsiLink.php" method="POST" class="box">
       <div class="header">
           <h4>Selamat Datang di Mangan Disik</h4>
           <p>Silahkan memilih pilihan login sesuai kebutuhan</p>
       </div>
       <div class="login-area">
           <input type="submit" value="ADMIN" class="submit" name="admin">
           <input type="submit" value="CUSTOMER" class="submit" name="customer">
           <input type="submit" value="CHEF" class="submit" name="chef">
           <input type="submit" value="BARISTA" class="submit" name="barista">
           <input type="submit" value="KASIR" class="submit" name="kasir">
       </div>
   </form> 
</body>
</html>