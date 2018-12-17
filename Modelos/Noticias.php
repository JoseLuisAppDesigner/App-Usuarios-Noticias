<?php

	//Primera función, que crea una noticia.
	function NewsCreate(){

		print "Se ha creado una noticia";

	}




	//fin de la primera función

	//Segunda función, que lee una noticia.
	function NewsRead($news_id){

		print "Leidos datos de la noticia con ID = $news_id";

	}




	//fin de la segunda función


	//tercera función, que modifica una noticia.
	function NewsUpdate($news_id){

		print "Se han actualizado los datos de la noticia con ID = $news_id";

	}


	



	//fin de la tercera función


	//Cuarta función, que elimina una noticia.
	function NewsDelete($news_id){

		print "Se ha eliminado la noticia con ID = $news_id";

	}





	//fin de la cuarta función


	//Quinta función, muestra un listado de las noticias.
	function NewsList(){

		print "Listado de todas las noticias existentes:<br> <ol><li></li><li></li><li></li><li></li></ol>";

	}




?>