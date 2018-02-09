
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Halaman Administrator</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="container1">
	<div class="grid">
	  <div class="dh12">
		
		  <div class="nav">Halaman Administrator</div>
				<div class="isiadmin">

<div id="kat">
<fieldset>
<form name="form1" method="post" action="<?php echo "?p=services3aksi"; ?>" enctype="multipart/form-data">
  <h3>Service 3</h3>
  <input name="namajasa" type="text" id="namajasa" placeholder="Judul"> 
   
  <input name="logojasa" type="file" id="logojasa" placeholder="Gambar Logo">  
 
  <input type="submit" name="Submit" value="Simpan">
</form>
</fieldset>
</div>

<?php
if($_GET["p"] == "services3aksi"){
		include "services3aksi.php";	
	}

?>

				</div>
			</div>
		</div>
	</div>
</div>
</body>
