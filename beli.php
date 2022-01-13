<?php 

session_start();

require_once 'koneksi.php';

$menu = $_GET['nama_menu'];

if(isset($_POST['tambah'])){
    $id_pelanggan = $_SESSION['IdPelanggan'];
    $id_menu = $_GET['id_menu'];
    $tanggal_pemesanan=date("Y-m-d");
    $jumlah = $_POST['jumlah'];

    // Menyimpan data ke tabel pemesanan
    if(!isset($_SESSION['id_transaksi'])){
        $insert = sqlsrv_query($koneksi, "INSERT INTO Transaksi (IdPelanggan,TanggalTransaksi, TotalPembayaran) VALUES ('$id_pelanggan','$tanggal_pemesanan', '0')");

        // ambil id transaksi
        $stmt = sqlsrv_query($koneksi, "SELECT IDENT_CURRENT('Transaksi')");
        $id_transaksi = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC);
        $_SESSION['id_transaksi'] = $id_transaksi[0];
    }

    $id_transaksi = $_SESSION['id_transaksi'];

    // menyimpan data ke detail
    $insert2 = sqlsrv_query($koneksi, "INSERT INTO DetailPesanan (IdTransaksi, IdMenu, JumlahMenu) VALUES ('$id_transaksi', '$id_menu', '$jumlah')");
    
    echo "<script>alert('Produk telah masuk ke pesanan anda');</script>";
    echo "<script>location= 'pesanan_pembeli.php'</script>";
}


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

    <title>Form Tambah Menu</title>
  </head>
  <body>
 
 <!-- Form Registrasi -->
  <div class="container">
    <h3 class="text-center mt-3 mb-5">SILAHKAN TAMBAH MENU</h3>
    <div class="card p-5 mb-5">
      <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
          <label for="menu1">Nama Menu</label>
          <input type="text" class="form-control" value='<?= $menu ?>' readonly>
        </div>
        <div class="form-group">
          <label for="stok1">Jumlah</label>
          <input type="number" class="form-control" name="jumlah">
        </div>
        <br>
        <button type="reset" class="btn btn-warning" name="reset">Kembali</button>
        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
      </form>

      
  </div>
  </div>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>