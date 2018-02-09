<?php
	
	include "koneksi.php";
	
	
	$logo  = $_FILES['logojasa']['name'];
	$loklogo = $_FILES['logojasa']['tmp_name'];
	
	move_uploaded_file($loklogo, "../logojasa/$logo");
	
	$sqljas = mysql_query("insert into slider (nama_slider, gambar_slider, tanggal_slider) values ('$_POST[namajasa]',  '$logo', NOW())");
	
	if($sqljas){
		echo "Event berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
?>