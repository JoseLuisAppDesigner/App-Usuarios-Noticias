<?php

	//Incluyo los ficheros de Usuarios, Noticias y funciones
	include 'Include/Funciones.php';
	include 'Modelos/Usuarios.php';
	include 'Modelos/Noticias.php';

	//Imprimo la primera función del usuario
	if (isset($_GET['seccion'])) {
		
		$seccion = $_GET['seccion'];
		
		if ($seccion == 'usuarios'){

				print "<h3>Sección Usuarios</h3>";

				if (isset($_GET['operacion']))	{

					$operacion = $_GET['operacion'];

					switch ($operacion) {
						case 'Create':
							UserCreate();
							break;
						case 'Read':
							if (isset($_GET['user_id'])) {
								UserRead($_GET['user_id']);
							} else {
								print "Se debe especificar el parámetro \"user_id\"";
							}
							
							break;
						case 'Update':
							if (isset($_GET['user_id'])) {
								UserUpdate($_GET['user_id']);
							} else {
								print "Se debe especificar el parámetro \"user_id\"";
							}
							
							break;
						case 'Delete':
							if (isset($_GET['user_id'])) {
								UserDelete($_GET['user_id']);
							} else {
								print "Se debe especificar el parámetro \"user_id\"";
							}
							
							
							break;
						
						default:
							print "Operación no válida. Debe ser \"Create\", \"Read\", \"Update\" o \"Delete\".";
							break;
										}

												}
				else 
					UserList();


									}

		else 	{

			if ($seccion == 'noticias'){

			print "<h3>Sección Noticias</h3>";

				if (isset($_GET['operacion']))	{

					$operacion = $_GET['operacion'];

					switch ($operacion) {
						case 'Create':
							NewsCreate();
							break;
						case 'Read':
							if (isset($_GET['news_id'])) {
								NewsRead($_GET['news_id']);
							} else {
								print "Se debe especificar el parámetro \"news_id\"";
							}
							
							break;
						case 'Update':
							if (isset($_GET['news_id'])) {
								NewsUpdate($_GET['news_id']);
							} else {
								print "Se debe especificar el parámetro \"news_id\"";
							}
							
							break;
						case 'Delete':
							if (isset($_GET['news_id'])) {
								NewsDelete($_GET['news_id']);
							} else {
								print "Se debe especificar el parámetro \"news_id\"";
							}
							
							break;
						
						default:
							print "Operación no válida. Debe ser \"Create\", \"Read\", \"Update\" o \"Delete\".";
							break;
										}


												}
				else 
					
						NewsList();
					
					
					

										}

			else
				print "La sección debe llamarse \"usuario\" o \"noticias\".";

	 		}
		}

	else 	
		print "ERROR. Debe existir un parámetro \"seccion\" en la URL.";
			
	
		



?>