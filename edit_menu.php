<?php 
include('koneksi.php');
session_start();
$id_menu = $_GET['id_menu'];
if(!isset($_SESSION['IdAdmin'])) {
  header("location: loginAM.php");
}else {
}
//$ambil = sqlsrv_query($koneksi, "SELECT * FROM Menu WHERE IdMenu='$id_menu'");
//$result = sqlsrv_fetch_array($ambil, sqlsrv_fetch_assoc($result));
//while($result= sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC)) :

$sql = "SELECT * FROM Menu WHERE IdMenu='$id_menu'";
$query = sqlsrv_query($koneksi, $sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


    <title>Form Edit Menu</title>
  </head>
  <body>
 <!-- Form Registrasi -->
  <div class="container">
    <h3 class="text-center mt-3 mb-5">SILAHKAN EDIT MENU</h3>
    <div class="card p-5 mb-5">
      <form method="POST" action="edit.php" enctype="multipart/form-data">
        <div class="form-group">
        <?php while($result= sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC)) : ?>
          <label for="menu1">Nama Menu</label>
          <input type="hidden" name="id_menu" value="<?php echo $result['IdMenu'] ?>">
          <input type="text" class="form-control" id="menu1" name="nama_menu" value="<?php echo $result['NamaMenu'] ?>">
        </div>
        <div class="form-group">
          <label for="#">Jenis Menu</label>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="jenis_menu" value="2">Makanan 
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" value="3" name="jenis_menu">Minuman
            </label>
          </div>
         </div>
        <div class="form-group">
          <label for="harga1">Harga Menu</label>
          <input type="text" class="form-control" id="harga1" name="harga" value="<?php echo $result['HargaMenu'] ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="tambah"button style="background-color:rgb(36, 113, 165);">Edit</button>
        <button type="reset" class="btn btn-dark btn-danger" name="reset">Hapus</button>
        <?php endwhile; ?>
  </div>
  </div>
  <!-- Akhir Form Registrasi --> 


  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>