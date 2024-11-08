<?php
session_start();
require_once '../config/conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$pass= $_POST['pass'];

$actualizacion = $conexion->prepare("UPDATE t_usuarios 
        SET nombre = :nombre, apellido = :apellido, email = :email, pass = :pass  
        WHERE id_usurio = :id_usurio");

$actualizacion->bindParam(':nombre',$nombre);
$actualizacion->bindParam(':apellido',$apellido);
$actualizacion->bindParam(':email',$email);
$actualizacion->bindParam(':pass',$pass);
$actualizacion->bindParam(':id_usurio',$_SESSION['usuario']['id_usurio']);

$actualizacion->execute();

if ($actualizacion) {
    $consulta = $conexion->prepare("SELECT * FROM t_usuarios WHERE id_usurio = :id_usurio");
    $consulta->bindParam(':id_usurio',$_SESSION['usuario']['id_usurio']);
    $consulta->execute();
    $datos = $consulta->fetch(PDO::FETCH_ASSOC);

    if ($datos) {
        $_SESSION['usuario'] = $datos;
        echo json_encode([1,"Informacion actualizada correctamente"]);
    } else {
        echo json_encode([0,"Error al actualizar datos"]);
    }
} else {
    echo json_encode([0,"Error al actualizar datos"]);
}

?>