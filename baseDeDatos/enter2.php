<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:../intellect/index.html");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

	




		