<?php 
include('koneksi.php');

$id_menu = $_POST['id_menu'];
$jenis_menu = $_POST['jenis_menu'];
$nama_menu = $_POST['nama_menu'];
$harga = $_POST['harga'];
//$nama_file = $_FILES['gambar']['name'];
//$source = $_FILES['gambar']['tmp_name'];
//$folder = './upload/';

//move_uploaded_file($source, $folder.$nama_file);
$edit = sqlsrv_query($koneksi, "UPDATE Menu SET IdJenisMenu='$jenis_menu',NamaMenu='$nama_menu', HargaMenu='$harga' WHERE IdMenu='$id_menu' ");

if($edit)
	header('location: daftar_menu.php');
else
	echo "Edit Menu Gagal";


 ?>