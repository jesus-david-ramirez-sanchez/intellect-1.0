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

	return false;

}

 



