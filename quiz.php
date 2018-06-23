<?php
session_start();
if (@!$_SESSION['user']) {
    header("Location:baseDeDatos/enter.php");
}
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <link rel="shortcut icon" type="image/x.icon" href="imagenes/4.png">
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
<body>
    <div class="row">
        <header class="fco">
            <header class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sx-2 col-sm-2 col-md-1 col-lg-1">
                        <img src="imagenes/4.png" >
                    </div>
                    <div class="col-sx-4 col-sm-4 col-md-4 col-lg-4 f6">
                        <h1><a href="index.html">INTELLECT</a></h1>
                        </div>
                        <div class="col-sx-6 col-sm-6 col-md-7 col-lg-7 ">
                        <a class="barra" href="quiz.php">Quiz</a>
                        <a class="barra" href="ejercicios.html">Ejercicios</a>
                        <a class="barra" href="explicaciones.html">Explicaciones</a>
                    </div>
                </div>
            </div>
            </header>
        </header>
        </div>
        </header>
        <br><br>
        <center><h2 class="titulo1">Pruebas</h2></center>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-sx-12 col-sm-12 col-md-6 col-lg-6 color1">
        

        <a href="examenes/prueba_definiciones1.html" class=quiz>Pueba definiciones N.1</a>
        <br><br>
        </div>

            <div class="col-sx-12 col-sm-12 col-md-6 col-lg-6 color2">
        <a href="examenes/prueba_definiciones2.html" class=quiz>Pueba definiciones N.2</a>
        <br><br>
            </div>
        </div>

            <div class="row">
            <div class="col-sx-12 col-sm-12 col-md-6 col-lg-6 color3">
                <a href="examenes/prueba_ejercicios2.html" class=quiz>Pueba ejercicios N.2</a>
        <br><br>
        </div>

        <div class="col-sx-12 col-sm-12 col-md-6 col-lg-6 color1">
        <a href="examenes/prueba_ejercicios1.html" class=quiz>Pueba ejercicios N.1</a>
        <br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-sx-12 col-sm-12 col-md- col-lg-12 color2">
        <center><a href="examenes/prueba_formulas.html" class=quiz>Pueba formulas</a></center>
        <br>
            </div>
        </div>
    </body>
</html>
