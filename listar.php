<?php
include("conexion.php");
$resultado = mysqli_query($conexion, "SELECT * FROM usuarios ORDER BY id DESC");
echo "<h2>Usuarios</h2>";
while ($fila = mysqli_fetch_assoc($resultado)) {
    $id = (int)$fila["id"];
    $nom = htmlspecialchars($fila["nombre"]);
    echo "$nom &nbsp; <a href='editar.php?id=$id'>Editar</a> &nbsp; <a href='eliminar.php?id=$id' onclick=\"return confirm('¿Eliminar?')\">Eliminar</a><br>";
}
?>