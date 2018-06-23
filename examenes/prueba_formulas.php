<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:intellect/baseDeDatos/enter.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PRUEBA DE FORMULAS #1</title>
	<link rel="shortcut icon" type="image/x.icon" href="../imagenes/4.png">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   	 	<link rel="stylesheet" type="text/css" href="../diseñoinicio.css">
	<script type="text/javascript"  src="formulas.js"></script>
    <link rel="shortcut icon" type="image/x.icon" href="4.png">
    <link rel="stylesheet" type="text/css" href="dise%C3%B1oinicio.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tinos" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tinos|Vidaloka" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neuton|Tinos|Vidaloka" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Adamina|Neuton|Tinos|Vidaloka" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prociono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Encode+Sans" rel="stylesheet">
</head>
<body style="background-color: rgba(42,119,285,0.3);">
<div id="container">
<div class="principa">
	<header>
		<center><h2>PRUEBA DE FORMULAS #1</h2></center>
		<center><h4>Aplica lo que aprendes<br>Con la siguiente prueba</h4></center>
	</header>
	<section>
		<div id="results"></div>
		<form name="quizForm" onsubmit="return submitAnswers()">
			<h3>1. Que observacion tiene la velocidad final?</h3>
			<input type="radio" name="q1" value="a" id="q1a">A. &lt; No nesesita t &gt;<br>
			<input type="radio" name="q1" value="b" id="q1b">B. &lt; No nesesita d &gt;<br>
			<input type="radio" name="q1" value="c" id="q1c">C. &lt; No nesesita Vf &gt;<br>
			<input type="radio" name="q1" value="d" id="q1d">D. &lt; No nesesita df &gt;<br>

			<h3>2. Cual es la observacion de l aceleracion?</h3>
			<input type="radio" name="q2" value="a" id="q2a">A.  No nesesita d  <br>
			<input type="radio" name="q2" value="b" id="q2b">B.  No nesesita Vo  <br>
			<input type="radio" name="q2" value="c" id="q2c">C.  No nesesita a  <br>
			<input type="radio" name="q2" value="d" id="q2d">D.  No tiene<br>

			<h3>3. Que formula se utiliza para allar la rapides de un objeto?</h3>
			<input type="radio" name="q3" value="a" id="q3a">A. Velocidad final <br>
			<input type="radio" name="q3" value="b" id="q3b">B. Velocidad inicial <br>
			<input type="radio" name="q3" value="c" id="q3c">C. Velocidad <br>
			<input type="radio" name="q3" value="d" id="q2d">D. Aceleracion <br>

			<h3>4. Vf es igual a?</h3>
			<input type="radio" name="q4" value="a" id="q4a">A. =Vo + a * t <br>
			<input type="radio" name="q4" value="b" id="q4b">B. =Vo<sup>2</sup> + 2a * 2.<br>
			<input type="radio" name="q4" value="c" id="q4c">C. =Vo / a<br>
			<input type="radio" name="q3" value="d" id="q2d">D. =Vp / t  <br>

			<h3>5. cul es la formula para allar la aceleracion?</h3>
			<input type="radio" name="q5" value="a" id="q5a">A. a= Vf - Vo / Vf <br>
			<input type="radio" name="q5" value="b" id="q5b">B. a= Vo - Vf / t <br>
			<input type="radio" name="q5" value="c" id="q5c">C. a= Vf - Vo / a <br>
			<input type="radio" name="q5" value="d" id="q2d">D. a= =Vo<sup>2</sup> + 2a * 2 <br>
			<br><br>
			<input type="submit" name="submit Answers">
		</form>
	</section>
    <a href="../quiz.html" class="retorno">Otras pruebas</a>
</div>
</div>
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

	 var answers= ["b","d","d","a","d"];


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