<?php
require_once("./app/config/dependencias.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/inicio.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/registro_vista.css">
    <link rel="stylesheet" href="./public/css/table.css">
    <link rel="stylesheet" href="./public/css/bootstrap-icons.css">
    <link rel="stylesheet" href="./public/css/icons/font/bootstrap-icons.css">

    <title>Formulario de datos</title>
</head>
<?php
if(isset($_REQUEST['view'])){
$vista = $_REQUEST['view'];
}else{
    $vista = "inicio";
}


$vista = $_REQUEST['view'];
switch($vista){
    case "inicio":{
        require_once './views/home.php';
        break;
    }
    case "login":{
        require_once './views/loginW.php';
        break;

    }case "registro":{
        require_once './views/registroV.php';
        break;

    } default:{
        require_once './views/error404.php';
        break;
    }

}
?>
    <script src="./public/js/registro_productos.js"></script>
    <script src="./public/js/cerrar_session.js"></script>
    <script src="./public/js/alerts.js"></script>
    <script src="./public/js/main.js"></script>
</html>