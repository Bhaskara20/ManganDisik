<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$password=$_POST["password"]; //untuk password digunakan enskripsi md5
$nama_lengkap=$_POST["nama_lengkap"];
$status=$_POST['status'];

if ($status == 'Barista') {
	$hasil=sqlsrv_query($koneksi, "INSERT INTO Barista (NamaBarista,UsernameBarista,PasswordBarista) VALUES('$nama_lengkap','$username','$password')");
}else if ($status == 'Juru Masak'){
	$hasil=sqlsrv_query($koneksi, "INSERT INTO JuruMasak (NamaJuruMasak,UsernameJuruMasak,PasswordJuruMasak) VALUES('$nama_lengkap','$username','$password')");
}else if ($status == 'Kasir'){
	$hasil=sqlsrv_query($koneksi, "INSERT INTO Kasir (NamaKasir,UsernameKasir,PasswordKasir) VALUES('$nama_lengkap','$username','$password')");
}else if ($status == 'Customer'){
	$hasil=sqlsrv_query($koneksi, "INSERT INTO Pelanggan (NamaPelanggan,UsernamePelanggan,PasswordPelanggan) VALUES('$nama_lengkap','$username','$password')");
}else if ($status == 'Admin'){
	$hasil=sqlsrv_query($koneksi, "INSERT INTO Administrator (NamaAdmin,UsernameAdmin,PasswordAdmin) VALUES('$nama_lengkap','$username','$password')");
}
//Kondisi apakah berhasil atau tidak
  if ($hasil) 
  {
	echo "<script>
				alert('Anda Berhasil Registrasi !');
				document.location='opsi2.php';
		  </script>";
  }
  else 
  {
	echo "<script>
				alert('Registrasi Anda Gagal !');
				document.location='register.php';
		  </script>";
  }

?>