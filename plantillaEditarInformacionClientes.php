<?php
// Include the database connection file
include('index.php');

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM cliente WHERE id_cliente = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$nombre = $resultData['nombre'];
$apellido = $resultData['apellido'];
$direccion = $resultData['direccion'];
$telefono = $resultData['telefono'];
$email = $resultData['email'];
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
    <h2>Editar información de la tabla clientes</h2>
	<form name="edit" method="post" action="editarInformacionClientes.php">
		<table class="table">
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
			</tr>
			<tr> 
				<td>Apellido</td>
				<td><input type="text" name="apellido" value="<?php echo $apellido; ?>"></td>
			</tr>
			<tr> 
				<td>Dirección</td>
				<td><input type="text" name="direccion" value="<?php echo $direccion; ?>"></td>
			</tr>
			<tr> 
				<td>Teléfono</td>
				<td><input type="text" name="telefono" value="<?php echo $telefono; ?>"></td>
			</tr>
			<tr> 
				<td>Correo electrónico</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_cliente" value=<?php echo $id; ?>></td>
			</tr>
			<td><input class="btn btn-primary btn-lg" type="submit" name="update" value="Update"></td>
		</table>
	</form>
</body>
</html>
