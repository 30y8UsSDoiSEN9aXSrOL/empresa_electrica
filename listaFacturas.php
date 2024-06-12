<?php include('index.php');
$result = mysqli_query($mysqli, "SELECT * FROM factura ORDER BY id_factura");
?>

<html>
<head>	
	<title>Lista de facturas</title>
</head>

<body>
	<table class="table">
		<tr>
			<td><strong>ID de la factura</strong></td>
			<td><strong>ID del cliente</strong></td>
			<td><strong>Fecha emisión</strong></td>
			<td><strong>Fecha de vencimiento</strong></td>
			<td><strong>Monto total a pagar</strong></td>
			<td><strong>Estado de la factura</strong></td>
		</tr>
		<?php
		while ($res = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>".$res['id_factura']."</td>";
			echo "<td>".$res['id_cliente']."</td>";
			echo "<td>".$res['fecha_emision']."</td>";
			echo "<td>".$res['fecha_vencimiento']."</td>";	
			echo "<td>".$res['monto_total']."</td>";	
			echo "<td>".$res['estado']."</td>";	
			echo "<td><a href=\"plantillaEditarInformacionFacturas.php?id=$res[id_factura]\" class=\"btn btn-warning\">Edit</a> | 
			<a href=\"borrarInformacionFacturas.php?id=$res[id_factura]\" class=\"btn btn-danger\" onClick=\"return confirm('¿Estás seguro que quieres borrar esto?')\">Borrar</a></td>";
		}
		?>
	</table>
	<hr class="my-4">
	<a class="btn btn-primary btn-lg" href="plantillaAgregarInformacionFacturas.php">Agregar nueva información</a>
</body>
</html>
