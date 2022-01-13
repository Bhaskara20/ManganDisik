<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
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

    <title>Mangan Disik</title>
  </head>
  <body>
      <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
        <div class="container">
        <a class="navbar-brand" href="user.php"><strong>Mangan Disik</strong> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link   mr-4" href="user.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pinned rounded-pill px-3 mr-4" href="menu_pembeli.php">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan_pembeli.php">PESANAN ANDA</a>
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

  <!-- Akhir Jumbotron -->

  <!--- Tulisan ---->


  <!-- Menu -->
      <div class="container">
        <div class="row mt-3">

          <?php 

          include('koneksi.php');

          $query = mysqli_query($koneksi, 'SELECT * FROM produk');
          $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
            

          ?>

          <?php foreach($result as $result) : ?>

          <div class="col-md-3 mt-4">
            <div class="card brder-dark">
              <img src="upload/<?php echo $result['gambar'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold"><?php echo $result['nama_menu'] ?></h5>
               <label class="card-text harga"><strong>Rp.</strong> <?php echo number_format($result['harga']); ?></label><br>
                <a href="beli.php?id_menu=<?php echo $result['id_menu']; ?>" class="btn btn-success btn-sm btn-block btn-dark ">BELI</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
         </div> 
      </div>
  <!-- Akhir Menu -->
  <!-- Awal Footer -->
  <footer class="pt-4" style="background-color: rgb(56, 52, 19); margin-top : 50px">
        <div class="container">
            <div class="row py-4 justify-content-lg-between">

                <div class="col-lg-3 col-12 my-auto align-left mb-1">
                    <a class="navbar-brand" href="user.php">
                        <span class="text h5">Mangan Disik</span>
                    </a>
                    <p class="text my-lg-4 my-2">
                        Silahkan Datang Berkunjung Lagi Kehadiran Anda Berarti Bagi Kami
                    </p>
                </div>

                <div class="col-lg-3 col-md-4 my-auto mt-4">
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
                        <p class="text-lg-start  text light-300">
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
  </body>
</html>
<?php } ?>