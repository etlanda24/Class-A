<?php
	
	include "koneksi.php";
	
	
	$logo  = $_FILES['logojasa']['name'];
	$loklogo = $_FILES['logojasa']['tmp_name'];
	
	move_uploaded_file($loklogo, "../services/$logo");
	
	$sqljas = mysql_query("insert into services (nama_services, gambar_services, tanggal_services,kategori_services) values ('$_POST[namajasa]',  '$logo', NOW(), 'b')");
	
	if($sqljas){
		echo "Event berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
?>