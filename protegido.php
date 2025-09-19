<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
echo "Hola, " . htmlspecialchars($_SESSION["usuario"]) . ". <a href='listar.php'>Ir a la lista</a>";
?>