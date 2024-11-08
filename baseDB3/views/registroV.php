<body class="d-flex justify-content-center align-items-center mt-5 p-3">
    <form action="./registro_vista.php" method="post" class="w-25 p-4">
        <div class="text-center mb-4 c-user">
        <i class="bi bi-browser-firefox"></i>
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <input type="text" class="form-control" placeholder="Ingrese su nombre" id="nombre" name="nombre" value="">
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <input type="text" class="form-control" placeholder="Ingrese su apellido" id="apellido" name="apellido" value="">
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <input type="email" class="form-control" placeholder="Ingrese su email" id="email" name="email" value="">
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <input type="password" class="form-control" placeholder="Ingrese su contraseña" id="pass" name="pass" value="">
        </div>
        <div class="container mt-5">
        <button type="button" id="btn-registrar" class="btn btn-secondary w-100 text-white fs-4">Registrarse</button>
        </div>
    </form>

    <script src="./public/js/alerts.js"></script>
    <script src="./public/js/main.js"></script>
</body>
</html>