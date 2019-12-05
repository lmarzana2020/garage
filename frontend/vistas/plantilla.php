<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="title" content="Revista Online">

	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio magnam esse fuga quam, explicabo, quod voluptatem laboriosam similique! ">

	<meta name="keyword" content="tienda, virtual, revista, online. pulgas, garage, ventas">
	<title>Revista Online</title>

	<link rel="stylesheet" href="vistas/css/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="vistas/css/plugins/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">


		<!--=====================================
				LINKS DE ESTILOS PERSONALIZADOS            -->
	<link rel="stylesheet" href="vistas/css/plantilla.css">
	<link rel="stylesheet" href="vistas/css/cabezote.css">
	<link rel="stylesheet" href="vistas/css/slide.css">	
	<link rel="stylesheet" href="vistas/css/escrituraanimada.css">	
	<link rel="stylesheet" href="vistas/css/footer.css">
		<link rel="stylesheet" href="vistas/css/productos.css">	
		<!--=====================================
				LINKS PERSONALIZADOS            -->
		





		<!--=====================================
				SCRIPTS PERSONALIZADOS            -->		

	<script src="vistas/js/plugins/jquery.min.js"></script>
	<script src="vistas/js/plugins/bootstrap.min.js"></script>
	<script src="vistas/js/plugins/jquery.easing.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>	






</head>
<body>
	

	<?php 
	/*=============================================
	=            ENCABEZADO          =
	=============================================*/
	include "modulos/header.html";
	
	/*=============================================
	=            SLIDER          =
	=============================================*/

	include "slide.html";

	/*=============================================
	=         PRODUCTOS DESTACADOS          =
	=============================================*/	

	include "modulos/destacados.html";

	/*=============================================
	=            REGISTRO DE USUARIOS          =
	=============================================*/	

	include "modulos/ingresousuarios.html";

	/*=============================================
	=            FOOTER          =
	=============================================*/

	include "modulos/footer.html";

	?>




<!--==================================================
=            SCRIPTS JAVASCRIPTS AÑADIDOS            =
===================================================-->


	<script src="vistas/js/cabezote.js" ></script>
	<script src="vistas/js/slide.js" ></script>
	<script src="vistas/js/plantilla.js" ></script>
	<script src="vistas/js/usuarios.js" ></script>	
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
	<script src="vistas/js/escrituraanimadamain.js"></script>


</body>
</html>