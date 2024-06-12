<?php
include('index.php');

if (isset($_POST['update'])) {
	$id_cliente = mysqli_real_escape_string($mysqli, $_POST['id_cliente']);
	$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
	$apellido = mysqli_real_escape_string($mysqli, $_POST['apellido']);
	$direccion = mysqli_real_escape_string($mysqli, $_POST['direccion']);
	$telefono = mysqli_real_escape_string($mysqli, $_POST['telefono']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	
	// Check for empty fields
	if (empty($nombre) || empty($apellido) || empty($direccion) || empty($telefono) || empty($email)) {
		if (empty($nombre)) {
			echo "<font color='red'>El campo nombre está vacio.</font><br/>";
		}
		
		if (empty($apellido)) {
			echo "<font color='red'>El campo edad está vacio.</font><br/>";
		}
		
		if (empty($direccion)) {
			echo "<font color='red'>El campo dirección está vacio.</font><br/>";
		}
		
		if (empty($telefono)) {
			echo "<font color='red'>El campo teléfono está vacio.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>El campo correo electrónico está vacio.</font><br/>";
		}
		
	echo "<br/><a href='javascript:self.history.back();' class=\"btn btn-warning\">Ingresa los datos nuevamente.</a>";
	} else {
		$result = mysqli_query($mysqli, "UPDATE cliente SET `nombre` = '$nombre', `apellido` = '$apellido', `direccion` = '$direccion' , `telefono` = '$telefono', `email` = '$email' WHERE `id_cliente` = $id_cliente");
		echo "<p><font color='green'>Los datos fueron actualizados con éxito</p>";
		echo "<a href='listaClientes.php' class=\"btn btn-info\">Ver datos en la tabla</a>";
	}
}
