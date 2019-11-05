<!DOCTYPE html>
    <html>
    <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 jQuery ui JS
	<script src="../js/jquery-ui.min.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="../js/mindmup-editabletable.js"></script></script>-->

	<!-- VUE.JS -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

	<!--Google -Fonts-->
		<link href='https://fonts.googleapis.com/css?family=Sintony:400,700&subset=latin-ext' rel='stylesheet' type='text/css'>


	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">

	<link href="css/estilos.css" rel="stylesheet">

	<!----SWEET ALERT--->
	<link rel="stylesheet" href="css/sweetalert2.min.css">
	<script src="js/sweetalert2.all.min.js"></script>


	<title>Toy Z</title>
</head>


<body style="background-color: #EEEEEE;">

	

	<?php
	    
	

		echo '<div class="wrapper">';
		

		/*=============================================
		=          CABEZOTE          =
		=============================================*/
			include "modulos/navbar.php";


        echo '<main style="background-color:#ff4d4d;">';

		/*=============================================
		=         SLIDE          =
		=============================================*/
			Include "modulos/slide.php";




		/*=============================================
		=          CONTENIDO         =
		=============================================*/

		/*if (isset($_GET["ruta"])){
	
			if ($_GET["ruta"] == "inicio" 
			 || $_GET["ruta"] == "salir"
			 ){

				include "modulos/".$_GET["ruta"].".php";
			
			}
		}

*/
		echo '</main>';
		echo '</div>';


	?>
 

		<script type="text/javascript" src="js/funciones.js"></script>
		<!--MASK PLUGINS-->
		<script type="text/javascript" src="js/jquery.mask.js"></script>
		<!--GOOGLE MAPS
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAquKX91W1Ikgk7KbpzmCyljrDUMPTrzgY&callback=initMap"
		async defer></script> -->
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script> -->

		<script src="js/CryptoJS/rollups/md5.js"></script>
		<!--boostrap -->




</body>
</html>
