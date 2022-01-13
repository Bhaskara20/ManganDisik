<?php 

include 'koneksi.php';

 
$id = $_GET["id_detail"];
$id_juru_masak = $_GET["id_juru_masak"];

$sql = "UPDATE DetailPesanan SET IdJuruMasak = '$id_juru_masak' WHERE IdDetailTransaksi ='$id'";

sqlsrv_query($koneksi, $sql);   


echo "<script>alert('Anda telah menerima tugas ');</script>"; 
echo "<script>location= 'chef.php'</script>";


?>