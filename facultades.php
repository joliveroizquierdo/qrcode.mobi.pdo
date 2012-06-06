<?php
require_once 'class/config.php';
$config=new Config();
$facultades=$config->getFacultades();
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
	
	<!--facultades-->
		<div data-role="page" id="facultades">
		   <header data-role="header" data-position="fixed">
			   <h1>Facultades</h1>  	
		   </header>
		   <div data-role="content">
				<ul data-role="listview">
					<?php foreach($facultades as $fac):?>
					<li><a href="descripcion.php?id=<?php echo $fac['id'];?>"><?php echo $fac['nombre'];?></a></li>
					<?php endforeach;?>
				</ul>
		   </div>
		   <footer data-role="footer"  data-position="fixed">
			<div data-role="navbar">
				<ul>
					<li><a href="#home" data-iconpos="top" data-icon="home">Inicio</a></li>
					<li><a href="#facultades" class="ui-btn-active ui-state-persist" data-iconpos="top" data-iconpos="top"  data-icon="grid">Facultades</a></li>
				</ul>
			</div>
		   </footer>
		</div>
	
	</body>
</html>