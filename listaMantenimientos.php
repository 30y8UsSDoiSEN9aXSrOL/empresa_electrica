<?php include('index.php');
$result = mysqli_query($mysqli, "SELECT * FROM mantenimiento ORDER BY id_mantenimiento");
?>

<html>
<head>	
	<title>Lista de empleados</title>
</head>

<body>
	<table class="table">
		<tr>
			<td><strong>ID del mantenimiento</strong></td>
			<td><strong>ID del empleado</strong></td>
			<td><strong>ID del medidor</strong></td>
			<td><strong>Fecha</strong></td>
			<td><strong>Descripción del mantenimiento</strong></td>
		</tr>
		<?php
		while ($res = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>".$res['id_mantenimiento']."</td>";
			echo "<td>".$res['id_empleado']."</td>";
			echo "<td>".$res['id_medidor']."</td>";
			echo "<td>".$res['fecha']."</td>";	
			echo "<td>".$res['descripcion']."</td>";	
			echo "<td><a href=\"plantillaEditarInformacionMantenimientos.php?id=$res[id_mantenimiento]\" class=\"btn btn-warning\">Edit</a> | 
			<a href=\"borrarInformacionMantenimientos.php?id=$res[id_mantenimiento]\" class=\"btn btn-danger\" onClick=\"return confirm('¿Estás seguro que quieres borrar esto?')\">Borrar</a></td>";
		}
		?>
	</table>
	<hr class="my-4">
	<a class="btn btn-primary btn-lg" href="plantillaAgregarInformacionMantenimientos.php">Agregar nueva información</a>
</body>
</html>
