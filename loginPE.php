<?php 
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->


    <title>Login Customer</title>
  </head>
  <body>
  <!-- Form Login -->
    <div class="container">
      <h4 class="text-center">Silahkan Login</h4>
      <hr>
      <form method="POST" action="">
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i></div>
              </div>
              <input type="text" class="form-control" placeholder="Masukkan Username" name="username">
            </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
              </div>
              <input type="password" class="form-control" placeholder="Masukkan Password" name="password">
          </div>
        </div>
        <div class="mb-3" >
          <small><a href="register.php" class="text-dark">Belum Punya Akun ? Buat Akun Anda !</a></small>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
        <button type="reset" name="reset" class="btn btn-danger">RESET</button>
      </form>
  <!-- Akhir Form Login -->

  <!-- Eksekusi Form Login -->
      <?php 
        if(isset($_POST['submit'])) {
          $username = $_POST['username'];
            $pass = $_POST['password'];
            $login =  "SELECT * FROM Pelanggan WHERE UsernamePelanggan = '$username' AND PasswordPelanggan = '$pass'";
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

               

                $_SESSION['IdPelanggan']                       = $r['IdPelanggan'];

                $_SESSION['NamaPelanggan']                  = $r['NamaPelanggan'];

                $_SESSION['UsernamePelanggan']        = $r['UsernamePelanggan'];

                $_SESSION['PasswordPelanggan']                   = $r['PasswordPelanggan'];

               

                //arahkan ke admin.php

                header('location: user.php');
            }
            else{
                echo "gagal";
            }
        }
       ?>
    </div>
  <!-- Akhir Eksekusi Form Login -->







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>