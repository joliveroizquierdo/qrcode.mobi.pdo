<?php
require_once 'class/config.php';
$config=new Config();
$id=strip_tags($_GET['id']);
$departamentos=$config->getDepartamentosPorId($id);
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
		        <?php foreach($departamentos as $dep):?>
					<p><b>Departamento:</b><?php echo $dep['nombre'];?></p>
					<p><b>Ubicaci&oacute;n:</b><?php echo $dep['ubicacion'];?></p>

			   <?php endforeach;?>
			  
			   <a href="misionD.php?id=<?php echo $dep['id'];?>" data-rel="dialog" data-role="button">Misi&oacute;n</a>
			   <a href="visionD.php?id=<?php echo $dep['id'];?>" data-rel="dialog" data-role="button">Visi&oacute;n</a>
			   <a href="videoD.php?id=<?php echo $dep['id'];?>" data-rel="dialog" data-role="button">Entrada Autos</a>
			   <a href="videoD2.php?id=<?php echo $dep['id'];?>" data-rel="dialog" data-role="button">Entrada Estudiantes</a>
			   <a href="<?php echo $dep['video1'];?>" data-rel="dialog" data-role="button">Entrada Autos href</a>
			   <a href="<?php echo $dep['video2'];?>" data-rel="dialog" data-role="button">Entrada Estudiantes href</a>
		       <a href="" data-role="button"  data-theme="b" data-rel="back">Cancelar</a>
		   </div>
		</div>

	</body>
</html>