<?php
	session_start();
	include "koneksi.php";
	$sqladm = mysql_query("select * from admin where username='$_SESSION[namaadm]'");
	$radm = mysql_fetch_array($sqladm);
	
	$logo  = $_FILES['logojasa']['name'];
	$loklogo = $_FILES['logojasa']['tmp_name'];
	
	move_uploaded_file($loklogo, "../logojasa/$logo");
	
	$sqljas = mysql_query("insert into event (judul_event, gambar_event, detail_event, tanggal_event) values ('$_POST[namajasa]',  '$logo', '$_POST[detailjasa]',NOW())");
	
	if($sqljas){
		echo "Event berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
?>