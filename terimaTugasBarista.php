<?php 

include 'koneksi.php';

 
$id = $_GET["id_detail"];
$id_Barista = $_GET["id_Barista"];

$sql = "UPDATE DetailPesanan SET IdBarista= '$id_Barista' WHERE IdDetailTransaksi ='$id'";

sqlsrv_query($koneksi, $sql);   


echo "<script>alert('Anda telah menerima tugas ');</script>"; 
echo "<script>location= 'barista.php'</script>";


?>