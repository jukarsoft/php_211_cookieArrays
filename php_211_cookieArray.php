<?php 
	$contenido = ['francia' => 'paris', 'italia' => 'roma'];
	//convierte array a formato JSON
	$listaContenido=json_encode($contenido);
	echo $listaContenido;//da un warning
	print_r($listaContenido);//da un warning
	setcookie('parametros',$listaContenido, time()+3600);



 ?>