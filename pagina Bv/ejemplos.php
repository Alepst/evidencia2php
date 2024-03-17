<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Ejemplos de Código</title>
</head>
<body class="bods">
	<?php
	//Ejemplo de Ejercicio secuencial
	echo "<h2>Ejercicio Secuencial </h2>";
	$x=1;
	$y =3.14;
	$z="Hola Mundo";
	$nombre="Gerardo Alejandro Torres Reyna";
	echo $x,"<br>", $y,"<br>","<br>", $z,"<br>",$nombre;
	//Ejemplo de Ejercicio If
	echo "<h2>Ejemplo de Ejercicio If</h2>";
	$r=3;
	$t=9;
	$result = ($r<=3 and $t <>9);
	if ($result ==true){
		echo "Se cumple la condición";
	} else{
		echo "No se cumple la condición";
	}
	//Ejercicio de ejemplo switch
	echo "<h2>Ejercicio de ejemplo switch</h2>";
	$numsw= 3;
	if ($numsw >=1 && $numsw <=7){
		switch ($numsw) {
			case 1:
				$diasw = "Domingo";
				break;
			case 2:
				$diasw = "Lunes";
				break;
			case 3:
				$diasw = "Martes";
				break;
			case 4:
				$diasw = "Miércoles";
				break;
			case 5:
				$diasw = "Jueves";
				break;
			case 6:
				$diasw = "Viernes";
				break;
			case 7:
				$diasw = "Sábado";
				break;
		}
		echo "<font face=Arial size=5 color=#DF013A><b>El día de la semana que le corresponde es ".$diasw."</b></font>";
	}else{
		printf("<font face=Arial size=5 color=#DF013A>El número no está en el rango del 1 al 7</b></font>");
	}
	//Ejercicio While
	echo "<h2><Ejercicio while </h2>";
	$numero = 0;
	while ($numero <10) {
		$numero++;
		echo "El valor del número es <b> ".$numero."</b><br>";
	} echo "<br>El ejercicio acabo en ".$numero." ";
	echo "<h2>Ejercicio Do While</h2>";
	$i=0;
	do{
		echo "El valor del número es:".$i. "<br>";
		$i++;
	}while ($i<=5);
	//Ejercicio For
	echo "<h2>Ejercicio For</h2>";
	echo "<table border=2>";
	for ($g=1; $g <=10 ; ++$g) { 
		echo sprintf("<tr><td>El cuadrado de ".$g." es ".$g*$g."</td></tr>");
	}
	echo "</table>";
	echo "<br><br>";

	//Ejercicio For Each
	echo "<h2>Ejercicio For Each</h2>";
	$cabecera = array("Nombre","Teléfono","Referencia");
	$luis = array("Luis García","645395715","Trabajo");
	$paco = array("Paco Salvatierra","625781225","Amigo");
	$sofia = array("Sofía López","664887221","Cliente");
	$pilar = array("Pilar Martínez","674458115","Familia");
	$agenda = array($cabecera, $luis,$paco, $sofia,$pilar);
	echo "<table class=tablass border=1 width=40% cellspacing=0>";
	foreach ($agenda as $fila) {
		echo "<tr>";
		foreach($fila as $celda){
			echo "<td>$celda</td>";
		}
		echo "</td>";
	} echo "</table>";
	?>
</body>
</html>