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
	<!--home-->	
		<div data-role="page" id="home">
			<header data-role="header" data-position="fixed">
				<h1 id="logo">QR-Unicor</h1>
			</header>
			<div data-role="content">
				<section id="menu">
					<figure>
					  <a href="facultades.php" title="Facultades">
						 <img src="images/fac.png" width="52" height="52" alt="Facultades"/>
						 <figcaption>Facultades</figcaption>
					  </a>
					</figure>
					<figure>
					  <a href="dependencias.php" title="Oficinas">
						 <img src="images/ofi.png" width="52" height="52" alt="Oficinas"/>
						 <figcaption>Oficinas</figcaption>
					  </a>
					</figure>
					<figure id="dpt">
					  <a href="departamentos.php" title="Departamentos">
						 <img src="images/dptos.png" width="52" height="52" alt="Departamentos"/>
						 <figcaption>Departamentos</figcaption>
					  </a>
					</figure>
					<figure id="lab">
					  <a href="laboratorios.php" title="Laboratorios">
						 <img src="images/lab.png" width="52" height="52" alt="Laboratorios"/>
						 <figcaption>Laboratorios</figcaption>
					  </a>
					</figure>
				</section>
			</div>
			<footer data-role="footer"  data-position="fixed">
			<div data-role="navbar">
				<ul>
					<li><a href="#home" class="ui-btn-active ui-state-persist" data-iconpos="top" data-icon="home">Inicio</a></li>
					<!--<li><a href="#Buscar" data-iconpos="top"  data-icon="grid">Buscar</a></li>-->
				</ul>
			</div>
		   </footer>
		</div>
		
	
	</body>
</html>