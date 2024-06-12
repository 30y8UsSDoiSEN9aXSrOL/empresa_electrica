<?php include('index.php');
$result = mysqli_query($mysqli, "SELECT * FROM cliente ORDER BY id_cliente");
?>

<html>
<head>
	<title>Agregar información</title>
</head>

<body>
	<h2>Agregar información a tabla clientes</h2>
	<form action="agregarInformacionClientes.php" method="post" name="add">
		<table class="table">
			<tr> 
				<td>Nombres</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr> 
				<td>Apellidos</td>
				<td><input type="text" name="apellido"></td>
			</tr>
			<tr> 
				<td>Dirección</td>
				<td><input type="text" name="direccion"></td>
			</tr>
			<tr> 
				<td>Teléfono</td>
				<td><input type="text" name="telefono"></td>
			</tr>
			<tr> 
				<td>Correo electrónico</td>
				<td><input type="email" name="email"></td>
			</tr>
			<td><input class="btn btn-primary btn-lg" type="submit" name="submit" value="Agregar información"></td>
		</table>
	</form>
</body>
</html>

