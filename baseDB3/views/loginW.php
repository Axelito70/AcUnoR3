<?php
if(isset($_SESSION['usuario'])){
    header("location:inicio");
    exit();
}
?>

<body class="d-flex justify-content-center align-items-center mt-5 p-3">
    <form action="./inicio" method="post" class="w-25 p-4">
        <div class="text-center mb-5 c-user">
        <i class="bi bi-browser-firefox"></i>
        </div>
        <div class="input-group mt-3">
            <input type="email" id="email-id" class="form-control" placeholder="Ingrese su email" name="email" value="">
        </div>
        <div class="input-group mt-3">
            <input type="password" id="pass-id" class="form-control" placeholder="Ingrese su contraseña" name="pass" value="">
        </div>
        <div class="container mt-5">
        <button type="button" id="btn-saludar" class="btn btn-primary w-100 text-white fs-4 mb-3">Ingresar</button>
        </div>
        <div class="mt-4 d-flex justify-content-center">
            <p class="">Registrate</p> 
            <a href="./registro" class="text-white mx-3">Crear ahora</a>
        </div>
    </form>

    <script src="./public/js/alerts.js"></script>
    <script src="./public/js/main.js"></script>
</body>
</html>