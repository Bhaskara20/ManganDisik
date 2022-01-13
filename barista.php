<?php  
include('koneksi.php');
    /*session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{*/
        session_start();
        
        $id_Barista = $_SESSION['IdBarista'];
        if(!isset($id_Barista)) {
          header("location: loginBA.php");
        }else {
        }
        
        $sql = "SELECT * FROM DetailPesanan
                JOIN Menu ON DetailPesanan.IdMenu = Menu.IdMenu WHERE IdBarista IS NULL AND IdJenisMenu = '3'";

        $query = sqlsrv_query($koneksi, $sql);

        // $result= sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC);
        //         var_dump($result);

        // exit;
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>Mangan Disik</title>
  </head>
  <body>
      <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
        <div class="container">
        <a class="navbar-brand" href="barista.php"><strong>Mangan Disik</strong> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link pinned rounded-pill px-3 mr-4" href="pesanan_pembeli.php">SILAHKAN PILIH TUGAS ANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->
  <!-- Jumbotron -->
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Background/bg5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block ">
        <h5><strong>Mangan Disik</strong></h5>
        <p>Sacred Food for Javanese Food <br> Monggo Dipesan</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Background/bg9.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><strong>Mangan Disik</strong></h5>
        <p>Sacred Food for Javanese Food <br> Monggo Dipesan</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Background/bg10.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><strong>Mangan Disik</strong></h5>
        <p>Sacred Food for Javanese Food <br> Monggo Dipesan.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev " href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only ">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

      </div>
  <!-- Akhir Jumbotron -->

  <!-- Menu -->
    <div class="container">
      <div class="judul-pesanan mt-5">
       
        <h3 class="text-center font-weight-bold">SILAHKAN PILIH TUGAS!</h3>
        
      </div>
      <table class="table table-bordered" id="example">
        <thead class="thead-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pesanan</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
            <?php 
              $nomor=1; 
              $totalbelanja = 0; 
              while($result= sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC)) : 
              $subharga = $result["HargaMenu"]*$result["JumlahMenu"];
            ?>
              
          <tr>
            <td><?= $nomor++; ?></td>
            <td><?=$result["NamaMenu"]; ?></td>
            <td><?php echo $result["JumlahMenu"];  ?></td>
            <td>
              <a href="terimaTugasBarista.php?id_detail=<?= $result["IdDetailTransaksi"]; ?>&id_Barista=<?= $id_Barista; ?>" class="badge badge-success">Terima</a>
            </td>
          </tr>
            <?php 
            ?>
            <?php endwhile; ?>
        </tbody>
      </table><br>     

      <?php 
      if(isset($_POST['konfirm'])) {
          //$tanggal = date("Y-m-d");
          $masuk_transaksi = "UPDATE Transaksi SET TotalPembayaran = '$totalbelanja'";
          $masuk= sqlsrv_query($koneksi, $masuk_transaksi);
          // Mengosongkan pesanan
          unset($_SESSION["id_transaksi"]);

          // Dialihkan ke halaman nota
          echo "<script>alert('Pemesanan Sukses!');</script>";
          echo "<script>location= 'menu_pembeli.php'</script>";
      }
      ?>
    </div>
    
  <!-- Akhir Menu -->
  <!-- Awal Footer -->
  <footer class="pt-4" style="background-color: rgb(36, 113, 165); margin-top : 50px">
        <div class="container">
            <div class="row py-4 justify-content-lg-between">

                <div class="col-lg-3 col-12 my-auto align-left mb-1">
                    <a class="navbar-brand text" href="barista.php">
                        <span class="text h5">Mangan Disik</span>
                    </a>
                    <p class="text my-lg-4 my-2">
                        Silahkan Datang Berkunjung Lagi Kehadiran Anda Berarti Bagi Kami
                    </p>
                </div>

                <div class="col-lg-3 col-md-4 my-auto mt-4 text">
                    <span class="text h5">Hubungi Kami</span>
                    <ul class="list-unstyled text text-300 m-0">
                        <li class="py-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text  py-1" href="tel:085155067653">085155067653</a>
                        </li>
                    </ul>


            </div>
        </div>

        <div class="w-100 py-3 bg-selecta">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text light-300">
                            Copyright © 2021- Mangan Disik. All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
  </body>
</html>
