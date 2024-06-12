<?php include('index.php');
$result = mysqli_query($mysqli, "SELECT * FROM contrato ORDER BY id_contrato");
?>

<html>
<head>	
	<title>Lista de clientes</title>
</head>

<body>
	<table class="table">
		<tr>
			<td><strong>ID del contrato</strong></td>
			<td><strong>ID del cliente</strong></td>
			<td><strong>Fecha de inicio</strong></td>
			<td><strong>Fecha de fin</strong></td>
			<td><strong>Tipo de contrato</strong></td>
		</tr>
		<?php
		while ($res = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>".$res['id_contrato']."</td>";
			echo "<td>".$res['id_cliente']."</td>";
			echo "<td>".$res['fecha_inicio']."</td>";
			echo "<td>".$res['fecha_final']."</td>";	
			echo "<td>".$res['id_tipo_contrato']."</td>";	
			echo "<td><a href=\"plantillaEditarInformacionContratos.php?id=$res[id_contrato]\" class=\"btn btn-warning\">Edit</a> | 
			<a href=\"borrarInformacionContratos.php?id=$res[id_contrato]\" class=\"btn btn-danger\" onClick=\"return confirm('¿Estás seguro que quieres borrar esto?')\">Borrar</a></td>";
		}
		?>
	</table>
	<hr class="my-4">
	<a class="btn btn-primary btn-lg" href="plantillaAgregarInformacionContratos.php">Agregar nueva información</a>
</body>
</html>
