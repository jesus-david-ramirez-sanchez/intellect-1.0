<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:intellect/baseDeDatos/enter.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PRUEBA DE FISICA #2</title>
	<link rel="shortcut icon" type="image/x.icon" href="../imagenes/4.png">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   	 	<link rel="stylesheet" type="text/css" href="../diseñoinicio.css">
<link rel="stylesheet" type="text/css" href="dise%C3%B1oinicio.css"><br><hr>
<script type="text/javascript" src=script_definiciones2.js></script>

</head>
<body style="background-color: rgba(42,119,285,0.3);">

<div id="container">
	<!--estilos css-->
	<div class="principa">
	<header>
		<center><h2>PRUEBA DE FISICA #2</h2></center>
		<center><h4>Aplica lo que aprendes<br>Con la siguiente prueba</h4></center>
	</header>
	<section>
		<div id="results"></div>
		<form name="quizForm" onsubmit="return submitAnswers()">
			<h3>1. Qué es la aceleración?</h3>
			<input type="radio" name="q1" value="a" id="q1a">A.  es el cambio de posición de un cuerpo <br>
			<input type="radio" name="q1" value="b" id="q1b">B.  trayecto recorrid a pie <br>
			<input type="radio" name="q1" value="c" id="q1c">C.  es la relación que existe entre la variación de la velocidad y la unidad de tiempo. <br><br><hr>

			<h3>2. Como se representa la aceleracion?</h3>
			<input type="radio" name="q2" value="a" id="q2a">A. a <br>
			<input type="radio" name="q2" value="b" id="q2b">B. t <br>
			<input type="radio" name="q2" value="c" id="q2c">C. v <br>
			<input type="radio" name="q2" value="d" id="q2d">D. Vo <br><br><hr>


			<h3>3. una de los siguientes datos es erroneo, seleccionarlo</h3>
			<input type="radio" name="q3" value="a" id="q3a">A. Δ=delta<br>
			<input type="radio" name="q3" value="b" id="q3b">B. Δt=tiempo inicial<br>
			<input type="radio" name="q3" value="c" id="q3c">C. Δv=velocidad final<br><br><hr>

			<h3>4. Qué es la velocidad?</h3>
			<input type="radio" name="q4" value="a" id="q4a">a.  trayecto recorrid a pie <br>
			<input type="radio" name="q4" value="b" id="q4b">b.  es el cambio de posición de un cuerpo <br>
			<input type="radio" name="q4" value="c" id="q4c">c.  es la duración de alguna acción, o de algún evento <br><br><hr>

0			<h3>5. cuales pueden ser las unidades de velocidad?</h3>
			<input type="radio" name="q5" value="a" id="q5a">a. k, km, m<br>
			<input type="radio" name="q5" value="b" id="q5b">b. kg, k, m<sup>2</sup> <br>
			<input type="radio" name="q5" value="c" id="q5c">c. m/s, cm/s, km/h <br><br><hr>
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
	var answers= ["c","a","c","b","c"];
	}

	  //chekeo

	 for(i = 1; i <= total;i++){
		if(eval('q'+i) == answers[i - 1]){
			score++;
		}
	}

	var results= document.getElementById('results');
	results.innerHTML = '<h3> Tu puntaje es <span> '+score+'</span> de <span>'+total+'</span></h3>';
	alert('tu puntaje es'+score+'de'+total);

	return false,

}

</script>

</body>
</html>