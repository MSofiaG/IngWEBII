<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['usuario'] = $_POST['usuario'] ?? 'invitado';
  header("Location: protegido.php");
  exit;
}
?>
<form method="POST">
  <label>Usuario</label>
  <input name="usuario" required>
  <label>Contraseña</label>
  <input name="password" type="password" required>
  <button>Entrar</button>
</form>
