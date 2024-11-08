<body class="vh-100">
    
    <div class="row m-4 c-datos">
      
                <?= $_SESSION['usuario']['nombre'] . " " . $_SESSION['usuario']['apellido']; ?>
            </p>

      
                <?= $_SESSION['usuario']['email'] ?>
            </p>

            <div>
                <button class="btn btn-danger" id="btn-cerrrar">
                    <i class="bi bi-box-arrow-left me-2"></i>
                    Cerrar sesión
                </button>
                <a href="./informacion_usuario.php" class="btn btn-info">Informacion</a>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-5 p-5 d-flex justify-content-center">
            <form action="./index.php" method="post" class="p-4">
                <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del producto" name="nombre_p" value="">
                </div>
                <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
                    <input type="text" class="form-control" id="precio" placeholder="Ingrese el precio del producto" name="precio_p" value="">
                </div>
                <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
                    <input type="text" class="form-control" id="cantidad" placeholder="Ingrese la cantidad del producto" name="cantidad_p" value="">
                </div>
                <div class="mt-3 c-button d-flex justify-content-center">
                    <button type="button" id="btn-registrar-producto" class="btn text-white fs-4 registrar_producto">Registrar producto</button> 
                </div>
            </form>
        </div>
        <div class="col-7 p-5">
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_productos">
                </tbody>
            </table>
    <script src="./public/js/alerts.js"></script>
    <script src="./public/js/query.js"></script>
    <script src="./public/js/tables.js"></script>
        </div>
    </div>
    </body>