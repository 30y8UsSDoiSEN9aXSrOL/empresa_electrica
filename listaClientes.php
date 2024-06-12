<?php include('index.php');
$result = mysqli_query($mysqli, "SELECT * FROM cliente ORDER BY id_cliente");
?>

<html>
<head>	
	<title>Lista de clientes</title>
</head>

<body>
	<table class="table">
		<tr>
			<td><strong>ID del cliente</strong></td>
			<td><strong>Nombre del cliente</strong></td>
			<td><strong>Apellido</strong></td>
			<td><strong>Direccion</strong></td>
			<td><strong>Teléfono</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Acción</strong></td>
		</tr>
		<?php
		while ($res = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>".$res['id_cliente']."</td>";
			echo "<td>".$res['nombre']."</td>";
			echo "<td>".$res['apellido']."</td>";
			echo "<td>".$res['direccion']."</td>";	
			echo "<td>".$res['telefono']."</td>";	
			echo "<td>".$res['email']."</td>";	
			echo "<td><a href=\"plantillaEditarInformacionClientes.php?id=$res[id_cliente]\" class=\"btn btn-warning\">Edit</a> | 
			<a href=\"borrarInformacionClientes.php?id=$res[id_cliente]\" class=\"btn btn-danger\" onClick=\"return confirm('¿Estás seguro que quieres borrar esto?')\">Borrar</a></td>";
		}
		?>
	</table>
	<hr class="my-4">
	<a class="btn btn-primary btn-lg" href="plantillaAgregarInformacionClientes.php">Agregar nueva información</a>
</body>
</html>
