<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   	<link rel="stylesheet" type="text/css" href="../estilos.css">
    <link rel="shortcut icon" type="image/x.icon" href="../imagenes/4.png">
    <link rel="stylesheet" type="text/css" href="../dise%C3%B1oinicio.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tinos" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Tinos|Vidaloka" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Neuton|Tinos|Vidaloka" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Adamina|Neuton|Tinos|Vidaloka" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prociono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Encode+Sans" rel="stylesheet">
 
	<title>Registro</title>
</head>
<body style="background-color: rgba(42,119,285,0.3);">
	<center><div class="tit"><h1 style="font-family: 'Vidaloka', serif; margin-bottom: 15px;">Inicio de sesión</h1><!--inicio de sesion-->
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<tr><td><label style="font-size: 14pt"><b>Correo: </b></label></td><!--campos de informacion-->
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr><!--diseño de <bordes-->
		<tr><td><label style="font-size: 14pt"><b>Contraseña:  </b></label></td><!--||-->
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr><!--diseño de bordes-->
		<tr><td></td><br>
			<td width=80 align=center><input style="margin-top: 10px;" class="btn btn-primary btn-lg" type="submit" value="Aceptar"></td><!--boton de envio-->
			</tr></tr></table>
		</form>
<br>


<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registro</b></legend><!--registro-->
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" /><!--campos de informacion-->
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; "><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/><!--||-->
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" /><!--||-->
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" /><!--||-->
    </div>
      
    </div>
   
    <center><input  class="btn btn-danger btn-lg" type="submit" name="submit" value="Registrarse"/></center><!--boton de envio-->
	<br>
	<br>
	<br>
  </fieldset>
</form>
</div><!--conexion al registro directo-->
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
			
		}
	?>


		</td>
		</tr>
		</table>
		</div></center></div></center>

	
</body>
</html>