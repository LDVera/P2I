<?php 

	$conexion=new mysqli('localhost', 'root', '' , 'prueba1') or die (mysqli_error($conexion));


	if(isset($_POST['btnGuardar'])){

		$nombre=$_POST['Nombre'];
		$ape_p=$_POST['Ap_P'];
		$ape_m=$_POST['Ap_M'];
		$carre=$_POST['Carrera'];
		$correo=$_POST['Email'];
		$contra=$_POST['Contraseña'];

		$sentencia_sql="insert into usuarios_r (Nombre, Ape_Paterno, Ape_Materno, Carrera, Email, Contraseña) values ('$nombre','$ape_p','$ape_m','$carre','$correo','$contra')" ;
		$conexion -> query($sentencia_sql) or die ($conexion->error);
	}

 ?>
