<?php
    include('koneksi.php');
    session_start();
    if(!isset($_SESSION['IdAdmin'])) {
      header("location: loginAM.php");
    }else {
    }
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
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="logout.php">LOGOUT ADMIN</a>
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

  <!-- Menu -->
      <div class="container">
        <a href="KasirRecord.php" class="btn btn-success mt-3"button style="background-color:rgb(36, 113, 165);">REKAM KERJA KASIR & TRANSAKSI</a>
        <a href="ChefRecord.php" class="btn btn-success mt-3"button style="background-color:rgb(36, 113, 165);">REKAM KERJA CHEF</a>
        <a href="BaristaRecord.php" class="btn btn-success mt-3"button style="background-color:rgb(36, 113, 165);">REKAM KERJA BARISTA</a>

          
  <!-- Akhir Menu -->

  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>
