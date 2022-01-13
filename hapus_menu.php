<?php 

include('koneksi.php');

$id_menu = $_GET['id_menu'];

$hapus= sqlsrv_query($koneksi, "DELETE FROM Menu WHERE IdMenu='$id_menu'");

if($hapus)
	header('location: daftar_menu.php');
else
	echo "Hapus data gagal";

 ?>