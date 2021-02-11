<?php
	$salt = "MATRIX";
	$usuario = array();
	if(isset($_POST["correo"])){

		$usuario["correo"] = $_POST["correo"];
	}

	$usuario["clave"] = md5($salt.$_POST["clave1"]);

	echo json_encode($usuario);
?>