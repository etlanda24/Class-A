<?php ob_start(); ?>
<?php
	include "koneksi.php";
	$sqladm = mysql_query("select * from admin where username='$_POST[username]' and password='$_POST[password]'");
	$row = mysql_num_rows($sqladm);
	$radm = mysql_fetch_array($sqladm);
	if($row > 0){
		
		$_SESSION["namaadm"]=$radm["username"];
		$_SESSION["passadm"]=$radm["password"];
		header("location:index2.html");
	}else{
		header("location:index.php");
	}
?> 
<?php ob_flush(); ?>