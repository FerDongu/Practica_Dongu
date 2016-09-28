<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practica 1</title>
</head>
<?php
if(isset($_POST['ver'])){
	$nombre = $_POST['nom'];
	//if ($nombre != null ){
		echo "Hola  $nombre";
		
		}

	
	//}
?>
<body>
<form name="index" action="" method="post">
<div align="center">
<label> Nombre </label>
<input type="text" name="nom"/><br/>
<input type="submit" name="ver" id="ver" value="Ver"/>
</div>
</form>
</body>
</html>