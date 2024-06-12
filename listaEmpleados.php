<?php include('index.php');
$result = mysqli_query($mysqli, "SELECT * FROM empleado ORDER BY id_empleado");
?>

<html>
<head>	
	<title>Lista de empleados</title>
</head>

<body>
	<table class="table">
		<tr>
			<td><strong>ID del empleado</strong></td>
			<td><strong>Nombre</strong></td>
			<td><strong>Apellido</strong></td>
			<td><strong>Cargo</strong></td>
			<td><strong>Fecha de contratación</strong></td>
		</tr>
		<?php
		while ($res = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>".$res['id_empleado']."</td>";
			echo "<td>".$res['nombre']."</td>";
			echo "<td>".$res['apellido']."</td>";
			echo "<td>".$res['cargo']."</td>";	
			echo "<td>".$res['fecha_contratacion']."</td>";	
			echo "<td><a href=\"plantillaEditarInformacionEmpleados.php?id=$res[id_empleado]\" class=\"btn btn-warning\">Edit</a> | 
			<a href=\"borrarInformacionEmpleados.php?id=$res[id_empleado]\" class=\"btn btn-danger\" onClick=\"return confirm('¿Estás seguro que quieres borrar esto?')\">Borrar</a></td>";
		}
		?>
	</table>
	<hr class="my-4">
	<a class="btn btn-primary btn-lg" href="plantillaAgregarInformacionEmpleados.php">Agregar nueva información</a>
</body>
</html>
