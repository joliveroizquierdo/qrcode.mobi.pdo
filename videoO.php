<?php
require_once 'class/config.php';
$config=new Config();
$id=strip_tags($_GET['id']);
$dependencias=$config->getDependenciasPorId($id);
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
	
		<div data-role="page" id="mision">
			 <header data-role="header">
				<h2>Recorrido</h2>
			 </header>
			 <div data-role="content">
				 <?php foreach($dependencias as $o):?>
					<iframe width="560" height="315" src="<?php echo $o['video2'];?>" frameborder="0" allowfullscreen></iframe>
			   <?php endforeach;?>
				 <a href="#" data-role="button"  data-theme="b" data-rel="back">Cancelar</a>
		     </div>
        </div>
        
	</body>
</html>