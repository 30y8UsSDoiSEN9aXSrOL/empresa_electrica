<?php
include('index.php');

$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM cliente WHERE id_cliente = $id");
echo "<p><font color='green'>Los datos fueron eliminados con éxito</p>";
echo "<a href='listaClientes.php' class=\"btn btn-info\">Ver datos actualizados de la tabla</a>";