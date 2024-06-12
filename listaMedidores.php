<?php include('index.php');
$result = mysqli_query($mysqli, "SELECT * FROM medidor ORDER BY id_medidor");
?>

<html>
<head>	
	<title>Lista de medidores</title>
</head>

<body>
	<table class="table">
		<tr>
			<td><strong>ID del medidor</strong></td>
			<td><strong>ID del contrato</strong></td>
			<td><strong>Lectura actual</strong></td>
			<td><strong>Fecha de lectura</strong></td>
			<td><strong>Ubicación del medidor</strong></td>
		</tr>
		<?php
		while ($res = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>".$res['id_medidor']."</td>";
			echo "<td>".$res['id_contrato']."</td>";
			echo "<td>".$res['lectura_actual']."</td>";
			echo "<td>".$res['fecha_lectura']."</td>";	
			echo "<td>".$res['ubicacion_medidor']."</td>";	
			echo "<td><a href=\"plantillaEditarInformacionMedidores.php?id=$res[id_medidor]\" class=\"btn btn-warning\">Edit</a> | 
			<a href=\"borrarInformacionMedidores.php?id=$res[id_medidor]\" class=\"btn btn-danger\" onClick=\"return confirm('¿Estás seguro que quieres borrar esto?')\">Borrar</a></td>";
		}
		?>
	</table>
	<hr class="my-4">
	<a class="btn btn-primary btn-lg" href="plantillaAgregarInformacionMedidores.php">Agregar nueva información</a>
</body>
</html>
