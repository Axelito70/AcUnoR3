<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location: ./login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualiza tu informacion</title>

    <style>
        /* General page styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container for the form */
        form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }

        /* Form heading */
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        /* Input fields styling */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        /* Button styling */
        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Responsive design */
        @media (max-width: 600px) {
            form {
                padding: 20px;
            }

            input[type="text"], button {
                font-size: 14px;
            }
        }
    </style>

</head>
<body>
    <form action="">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="text" name="apellido" id="apellido" placeholder="Apellido">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="text" name="pass" id="pass" placeholder="Contraseña">
        <button type="button" id="btn-actualizar">Actualizar informacion</button>
    </form>
    
    <script src="./public/js/informacion_usuario.js"></script>
</body>
</html>
