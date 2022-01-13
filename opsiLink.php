<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$AM=$_POST["admin"];
$PE=$_POST["customer"]; //untuk password digunakan enskripsi md5
$JM=$_POST["chef"];
$BA=$_POST['barista'];
$KA=$_POST['kasir'];

if ($AM) {
	echo "<script>
				document.location='loginAM2.php';
		  </script>";
}else if ($PE){
	echo "<script>
				document.location='loginPE2.php';
		  </script>";
}else if ($JM){
	echo "<script>
				document.location='loginJM2.php';
		  </script>";
}else if ($BA){
	echo "<script>
				document.location='loginBA2.php';
		  </script>";
}else if ($KA){
	echo "<script>
				document.location='loginKA2.php';
		  </script>";
}


?>