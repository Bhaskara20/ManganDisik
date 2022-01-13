<?php 
include 'koneksi.php';
?>
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
   <form method="POST" action="" class="box">
       <div class="header">
           <h4>Selamat Datang di Mangan Disik</h4>
           <p>Silahkan Login....</p>
       </div>
       <div class="login-area">
           <input type="text" class="username form-control" id="user" name="username" placeholder="Username">
           <input type="password" class="password" name="password" placeholder="Password">
           <button type="submit" value="Login" name = "submit" class="submit">Login</button>
       </div>
       
   </form>
   <?php 
        if(isset($_POST['submit'])) {
          $username = $_POST['username'];
            $pass = $_POST['password'];
            $login =  "SELECT * FROM Kasir WHERE UsernameKasir = '$username' AND PasswordKasir = '$pass'";
            $stmt = sqlsrv_query($koneksi, $login);
            $ketemu= sqlsrv_has_rows($stmt);
            $r = sqlsrv_fetch_array($stmt);
            //echo $stmt;
            if ($ketemu)  {
                //bangkitkan session

                session_start();
                session_regenerate_id(true);

                //daftarkan session ke server

                /*session_register("IdKasir");

                session_register("NamaKasir");

                session_register("UsernameKasir");

                session_register("PasswordKasir");*/

               

                $_SESSION['IdKasir']                       = $r['IdKasir'];

                $_SESSION['NamaKasir']                  = $r['NamaKasir'];

                $_SESSION['UsernameKasir']        = $r['UsernameKasir'];

                $_SESSION['PasswordKasir']                   = $r['PasswordKasir'];

               

                //arahkan ke admin.php

                header('location: kasir.php');
            }
            else{
                echo "gagal";
            }
        }
       ?>
   
</body>
</html>