<?php 

include 'koneksi.php';

 
$id = $_GET["id_detail"];

$sql = "DELETE FROM DetailPesanan WHERE IdDetailTransaksi ='$id'";

sqlsrv_query($koneksi, $sql);   


echo "<script>alert('Produk telah dihapus');</script>"; 
echo "<script>location= 'pesanan_pembeli.php'</script>";


?>