<?php 

include 'koneksi.php';

 
$id = $_GET["id_detail"];
$id_Kasir = $_GET["id_Kasir"];

$sql = "UPDATE Transaksi SET IdKasir= '$id_Kasir' WHERE IdTransaksi='$id'";

sqlsrv_query($koneksi, $sql);   


echo "<script>alert('Anda telah menerima tugas ');</script>"; 
echo "<script>location= 'kasir.php'</script>";


?>