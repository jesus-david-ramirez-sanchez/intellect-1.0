<?php
	session_start();
	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	require("connect_db.php");

	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				$id = 0;
				$r = mysqli_query($mysqli,"SELECT id FROM login");
				while($d = mysqli_fetch_row($r)) $id = $d[0];
				$id++;
				
				mysqli_query($mysqli,"INSERT INTO login VALUES('$id','$realname','$pass','$mail','','2')");
				
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				$_SESSION['user'] = $realname;
				header("location:../quiz.php");
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>