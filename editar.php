<?php
include("conexion.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = (int)($_POST['id'] ?? 0);
  $nombre = htmlspecialchars($_POST['nombre'] ?? '');
  $stmt = mysqli_prepare($conexion, "UPDATE usuarios SET nombre=? WHERE id=?");
  mysqli_stmt_bind_param($stmt, 'si', $nombre, $id);
  mysqli_stmt_execute($stmt);
  header("Location: listar.php");
  exit;
}
$id = (int)($_GET['id'] ?? 0);
$r = mysqli_query($conexion, "SELECT id, nombre FROM usuarios WHERE id=$id");
$row = mysqli_fetch_assoc($r);
?>
<form method="POST">
  <input type="hidden" name="id" value="<?php echo (int)$row['id']; ?>">
  <label>Nombre</label>
  <input name="nombre" value="<?php echo htmlspecialchars($row['nombre']); ?>" required maxlength="100">
  <button type="submit">Guardar</button>
  <a href="listar.php">Cancelar</a>
</form>
