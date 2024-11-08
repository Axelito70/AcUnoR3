<?php
session_start();
require_once '../config/conexion.php';

$consulta = $conexion->prepare("SELECT * FROM t_usuarios WHERE id_usurio = :id_usurio");
$consulta->bindParam(':id_usurio',$_SESSION['usuario']['id_usurio']);
$consulta->execute();
$datos = $consulta->fetch(PDO::FETCH_ASSOC);

echo json_encode($datos);
?>