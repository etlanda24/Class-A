<?php
	
	include "koneksi.php";
	
	
	$logo  = $_FILES['logojasa']['name'];
	$loklogo = $_FILES['logojasa']['tmp_name'];
	
	move_uploaded_file($loklogo, "../tests/$logo");
	
	$sqljas = mysql_query("insert into tests (nama_tests, gambar_tests, tanggal_tests,kategori_tests) values ('$_POST[namajasa]',  '$logo', NOW(), 'c')");
	
	if($sqljas){
		echo "Event berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
?>