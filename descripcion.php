<?php
require_once 'class/config.php';
$config=new Config();
$id=strip_tags($_GET['id']);
$facultades=$config->getFacultadesPorId($id);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Recorridos Virtuales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" type="text/css" href="jquery.mobile-1.0.1.css"/>
	<link rel="stylesheet" type="text/css" href="estilos.css"/>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery.mobile-1.0.1.js"></script>
    
</head>
	<body>
	
		<div data-role="page" id="descripcion">
		   <header data-role="header">
			   	<h2>Descripci&oacute;n</h2>
		   </header>
		   <div data-role="content">
		        <?php foreach($facultades as $fac):?>
					<p><b>Facultad:</b><?php echo $fac['nombre'];?></p>
					<p><b>Decano:</b><?php echo $fac['decano'];?></p>
					<p><b>Ubicaci&oacute;n:</b><?php echo $fac['ubicacion'];?></p>

			   <?php endforeach;?>
			  
			   <a href="mision.php?id=<?php echo $fac['id'];?>" data-rel="dialog" data-role="button">Misi&oacute;n</a>
			   <a href="vision.php?id=<?php echo $fac['id'];?>" data-rel="dialog" data-role="button">Visi&oacute;n</a>
			   <a href="video.php?id=<?php echo $fac['id'];?>" data-rel="dialog" data-role="button">Recorrido</a>
		       <a href="" data-role="button"  data-theme="b" data-rel="back">Cancelar</a>
		   </div>
		</div>

	</body>
</html>