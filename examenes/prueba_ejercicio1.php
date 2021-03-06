<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:intellect/baseDeDatos/enter.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PRUEBA DE EJERCISIOS #1</title>
	<link rel="shortcut icon" type="image/x.icon" href="../imagenes/4.png">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   	 	<link rel="stylesheet" type="text/css" href="../diseñoinicio.css">
    <link rel="stylesheet" type="text/css" href="dise%C3%B1oinicio.css"><br><hr>
	<script type="text/javascript"  src="script_ejercicios1.js"></script>

</head>
<body style="background-color: rgba(42,119,285,0.3);">
<div id="container">

	<div class="principa">
	<header>
		<center><h2>PRUEBA DE EJERCISIOS #1</h2></center>
		<center><h4>Aplica lo que aprendes<br>Con la siguiente prueba</h4></center>
	</header>
	<section>
		<div id="results"></div>
		<div class="cont">
		<form name="quizForm" onsubmit="return submitAnswers()">
			<h3>1. Un objeto se mueve con una rapidez constante de 6 m/s. Esto significa que el objeto:</h3>
			<input type="radio" name="q1" value="a" id="q1a">A. &lt; Aumenta su rapidez en 6 m/s cada segundo&gt;<br>
			<input type="radio" name="q1" value="b" id="q1b">B. &lt; Disminuye su rapidez en 6 m/s cada segundo &gt;<br>
			<input type="radio" name="q1" value="c" id="q1c">C. &lt; No se mueve &gt;<br>
			<input type="radio" name="q1" value="d" id="q1d">D. &lt; Tiene una aceleración positiva &gt;<br>
			<input type="radio" name="q1" value="e" id="q1e">E. &lt; Se mueve 6 metros cada segundo &gt;<br><br><hr>

			<h3>2. Un automóvil de juguete se mueve 8 m en 4 s con una velocidad constante. ¿Cuál es la velocidad el automóvil?</h3>
			<input type="radio" name="q2" value="a" id="q2a">A.  1 m/s  <br>
			<input type="radio" name="q2" value="b" id="q2b">B.  2 m/s  <br>
			<input type="radio" name="q2" value="c" id="q2c">C.  3 m/s  <br>
			<input type="radio" name="q2" value="d" id="q2d">D.  4 m/s  <br>
			<input type="radio" name="q2" value="e" id="q2d">E.  5 m/s  <br><br><hr>

			<h3>3. Un tren se mueve con una velocidad constante de 50 km/h. ¿Qué tan lejos habrá llegado después de 0,5 h?</h3>
			<input type="radio" name="q3" value="a" id="q3a">A. 10 km <br>
			<input type="radio" name="q3" value="b" id="q3b">B. 20 km <br>
			<input type="radio" name="q3" value="c" id="q3c">C. 25 km <br>
			<input type="radio" name="q3" value="d" id="q2d">D. 45 km  <br>
			<input type="radio" name="q3" value="e" id="q2e">E. 50 km  <br><br><hr>

			<h3>4. Un bote puede moverse a una velocidad constante de 8 km/h en aguas calmas. ¿Cuánto tiempo le tomará al bote recorrer 24 km?</h3>
			<input type="radio" name="q4" value="a" id="q4a">A.  es el cambio de posición de un cuerpo <br>
			<input type="radio" name="q4" value="b" id="q4b">B.  es la longitud del desplazamiento o del cambio de posición que realiza un móvil.<br>
			<input type="radio" name="q4" value="c" id="q4c">C.  es la duración de alguna acción, o de algún evento<br>
			<input type="radio" name="q3" value="d" id="q2d">D. 45 km  <br>
			<input type="radio" name="q3" value="e" id="q2e">E. 50 km  <br><br><hr>

			<h3>5. Un ciclista se mueve con una rapidez constante de 4 m/s. ¿Cuánto tiempo le tomará al ciclista recorrer 36 m??</h3>
			<input type="radio" name="q5" value="a" id="q5a">A. 2 h <br>
			<input type="radio" name="q5" value="b" id="q5b">B. 3 h <br>
			<input type="radio" name="q5" value="c" id="q5c">C. 4 h <br>
			<input type="radio" name="q3" value="e" id="q2d">D. 6 h <br>
			<input type="radio" name="q3" value="e" id="q2e">E. 8 h <br><br><hr>

			<h3>6. Un objeto se mueve con una aceleración constante de 5 m/s<sup>2</sup> ¿Cuál de los siguientes enunciados es verdadero?</h3>
			<input type="radio" name="q6" value="a" id="q6a">A. La velocidad del objeto se mantiene sin cambios <br>
			<input type="radio" name="q6" value="b" id="q6b">B. El objeto se mueve 5 m cada segundo <br>
			<input type="radio" name="q6" value="c" id="q6c">C. La aceleración del objeto aumenta 5 m/s<sup>2</sup> cada segundo <br>
			<input type="radio" name="q6" value="e" id="q6d">D. La aceleración del objeto disminuye 5 m/s<sup>2</sup> cada segundo <br>
			<input type="radio" name="q6" value="e" id="q6e">E. La velocidad del objeto aumenta 5 m/s cada segundo <br><br><hr>

			<h3>7. Un automóvil y un camión de envíos comienzan desde un punto detenido y aceleran con la misma tasa. Sin embargo, el automóvil acelera durante dos veces la cantidad de tiempo que el camión. ¿Cuál es la rapidez final del automóvil en comparación con el camión?</h3>
			<input type="radio" name="q7" value="a" id="q7a">A.  La mitad <br>
			<input type="radio" name="q7" value="b" id="q7b">B.  La misma <br>
			<input type="radio" name="q7" value="c" id="q7c">C.  El doble <br>
			<input type="radio" name="q7" value="e" id="q7d">D.  El cuádruple <br>
			<input type="radio" name="q7" value="e" id="q7e">E.  Un cuarto <br><br><hr>

			<h3>8. Un automóvil y un camión de envíos comienzan desde un punto detenido y aceleran con la misma tasa. Sin embargo, el automóvil acelera durante dos veces la cantidad de tiempo que el camión. ¿Cuál es la distancia que recorrió el automóvil en comparación con el camión?</h3>
			<input type="radio" name="q8" value="a" id="q8a">A. La mitad <br>
			<input type="radio" name="q8" value="b" id="q8b">B. La misma <br>
			<input type="radio" name="q8" value="c" id="q8c">C. El doble <br>
			<input type="radio" name="q8" value="e" id="q8d">D. l cuádruple  <br>
			<input type="radio" name="q8" value="e" id="q8e">E. Un cuarto  <br><br><hr>

			<h3>9. Un automóvil moderno puede desarrollar una aceleración cuatro veces mayor que un auto antiguo como el “Lanchester 1800”. Si aceleran durante la misma distancia, ¿cuál será la velocidad del automóvil moderno en comparación con el automóvil antiguo?</h3>
			<input type="radio" name="q9" value="a" id="q9a">A. La mitad <br>
			<input type="radio" name="q9" value="b" id="q9b">B. La misma  <br>
			<input type="radio" name="q9" value="c" id="q9c">C. El doble<br>
			<input type="radio" name="q9" value="e" id="q9d">D. l cuádruple <br>
			<input type="radio" name="q9" value="e" id="q9e">E. Un cuarto<br><br><hr>

			<h3>10. Un objeto deja de estar en reposo y cae en la ausencia de resistencia de aire. ¿Cuál de los siguientes enunciados es verdadero acerca de su movimiento?</h3>
			<input type="radio" name="q10" value="a" id="q10a">A. Su aceleración es igual a cero <br>
			<input type="radio" name="q10" value="b" id="q10b">B. Su aceleración es constante <br>
			<input type="radio" name="q10" value="c" id="q10c">C. Su velocidad es constante <br>
			<input type="radio" name="q10" value="e" id="q10d">D. Su aceleración está aumentando <br>
			<input type="radio" name="q10" value="e" id="q10e">E. Su velocidad está disminuyendo <br><br><hr>
			<br><br>
			<input type="submit" name="submit Answers">
		</form>
	</section>
</div>
</div>
</div>
<a href="../quiz.html" class="retorno">Otras pruebas</a>
<script lenguaje="javascript">

function submitAnswers(){
var total= 10;
var score= 0;

	//lo  que digita el usuario
	var q1 = document.forms["quizForm"]["q1"].value
	var q2 = document.forms["quizForm"]["q2"].value
	var q3 = document.forms["quizForm"]["q3"].value
	var q4 = document.forms["quizForm"]["q4"].value
	var q5 = document.forms["quizForm"]["q5"].value
	var q6 = document.forms["quizForm"]["q6"].value
	var q7 = document.forms["quizForm"]["q7"].value
	var q8 = document.forms["quizForm"]["q8"].value
	var q9 = document.forms["quizForm"]["q9"].value
	var q10 = document.forms["quizForm"]["q10"].value
	
	//validacion
	for(i = 1; i <= total;i++){
		if(eval('q'+i) == null || eval('q'+i) == ''){
			alert('te falta la pregunta '+ i);
			
	}

	//respuestas

	 var answers= ["e","b","c","b","e","e","c","d","c","b"];


	  //chekeo

	 for(i = 1; i <= total;i++){
		if(eval('q'+i) == answers[i - 1]){
			score++;
		}
	}

		
	//mostrar resultados

	var results= document.getElementById('results');
	results.innerHTML = '<h3> Tu puntaje es<span> '+score+'</span> de <span>'+total+'</span></h3>';
	alert('tu puntaje es'+score+'de'+total);

	return false;

}
</script>


</body>
</html>