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
	alert('tu puntaj es'+score+'de'+total);

	return false;

}
}