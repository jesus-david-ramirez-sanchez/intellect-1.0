<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:intellect/baseDeDatos/enter.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PRUEBA FISICA #1</title>
	<link rel="shortcut icon" type="image/x.icon" href="../imagenes/4.png">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   	 	<link rel="stylesheet" type="text/css" href="../diseñoinicio.css">
	<link rel="stylesheet" type="text/css" href="dise%C3%B1oinicio.css">
	<script type="text/javascript"  src="script_definiciones1.js"></script>

</head>
<body style="background-color: rgba(42,119,285,0.3);">
<div id="container">
	<!--estilos css-->
	<div class="principa">
	<header>
		<center><h2>PRUEBA DE FISICA #1</h2></center>
		<center><h4>Aplica lo que aprendes<br>Con la siguiente prueba</h4></center>
	</header>
	<section>
		<div id="results"></div>
		<form name="quizForm" onsubmit="return submitAnswers()">
		   <div class="cont">
			<h3>1. Que es el movimiento?</h3>
			<input type="radio" name="q1" value="a" id="q1a">a. &lt; es el cambio de posición de un cuerpo &gt;<br>
			<input type="radio" name="q1" value="b" id="q1b">b. &lt; trayecto recorrid a pie &gt;<br>
			<input type="radio" name="q1" value="c" id="q1c">c. &lt; ninguna de las anteriores &gt;<br><br><hr><br>

			<h3>2. Qué es el movimiento variado?</h3>
			<input type="radio" name="q2" value="a" id="q2a">a. es aquel movimiento donde el móvil sufre cambios de velocidad en intervalos de tiempos iguales. <br>
			<input type="radio" name="q2" value="b" id="q2b">b. es el cambio de posición de un cuerpo <br>
			<input type="radio" name="q2" value="c" id="q2c">c. trayecto recorrid a pie <br>
			<input type="radio" name="q2" value="d" id="q2d">d. ninguna de las anteriores <br><br><hr>


			<h3>3. Qué es el movimiento rectilíneo uniformemente variado?</h3>
			<input type="radio" name="q3" value="a" id="q3a">a. es aquel movimiento en el cual la velocidad cambia en su valor <br>
			<input type="radio" name="q3" value="b" id="q3b">b. tes aquel movimiento donde el móvil sufre cambios de velocidad en intervalos de tiempos iguales. <br>
			<input type="radio" name="q3" value="c" id="q3c">c. ninguna de las anteriores <br><br><hr>

			<h3>4. Qué es el espacio?</h3>
			<input type="radio" name="q4" value="a" id="q4a">a.  es el cambio de posición de un cuerpo <br>
			<input type="radio" name="q4" value="b" id="q4b">b.  es la longitud del desplazamiento o del cambio de posición que realiza un móvil.<br>
			<input type="radio" name="q4" value="c" id="q4c">c.  es la duración de alguna acción, o de algún evento<br><br><hr>

			<h3>5. Qué es el tiempo?</h3>
			<input type="radio" name="q5" value="a" id="q5a">a.  trayecto recorrid a pie <br>
			<input type="radio" name="q5" value="b" id="q5b">b.  es el cambio de posición de un cuerpo <br>
			<input type="radio" name="q5" value="c" id="q5c">c.  es la duración de alguna acción, o de algún evento <br><br><hr>
			<br><br>
			<input type="submit" name="submit Answers">
			</form>
		</section>	

</div>
</div>
<a href="../quiz.html" class="retorno">Otras pruebas</a>
<script lenguaje="javascript">

function submitAnswers(){
var total= 5;
var score= 0;

	//lo  que digita el usuario
	var q1 = document.forms["quizForm"]["q1"].value
	var q2 = document.forms["quizForm"]["q2"].value
	var q3 = document.forms["quizForm"]["q3"].value
	var q4 = document.forms["quizForm"]["q4"].value
	var q5 = document.forms["quizForm"]["q5"].value
	
	//validacion
	for(i = 1; i <= total;i++){
		if(eval('q'+i) == null || eval('q'+i) == ''){
			alert('te falta la pregunta '+ i);
			
	}

	//respuestas

	 var answers= ["a","a","a","b","c"];


	  //chekeo

	 for(i = 1; i <= total;i++){
		if(eval('q'+i) == answers[i - 1]){
			score++;
		}
	}

		
	//mostrar resultados

	var results= document.getElementById('results');
	results.innerHTML = '<h3> Tu puntaje es<span> '+score+'</span> de <span>'+total+'</span></h3>';
	alert('tu puntaj es'+score+'de'+total);

	return false;

}
</script>
<script src="js/jquery.ja"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>