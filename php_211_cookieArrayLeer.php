<?php 
	$listaContenido= $_COOKIE['parametros'];
	//convierte de formato JSON a array  (true para arrays asociativos)
	$contenido=json_decode($listaContenido,true);
	print_r($contenido);
	



 ?>