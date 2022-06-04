<?php include('./templates/_partials/head.php'); ?>

<div class = "container" id = "cabecera">
        
        <div class="text-center mt-3">
            <h1>Bienvenido</h1>
            <h3>Seleccione la operación a realizar</h3>
        </div>

        <div align = "center" class="botones">

            <div class="mt-3">
                <a href="./templates/layouts/create.php">
                    <button type = "button" class = "btn btn-success" id = "btn_crear">
                        Crear registro
                    </button>
                </a>
            </div>

            <div class="mt-2">
                <a href="./templates/layouts/read.php">
                    <button type = "submit" class = "btn btn-info" id = "btn_registrar">
                        Ver registro
                    </button>
                </a>
                
            </div>

            <div class="mt-2">
                <a href="./templates/layouts/update.php">
                    <button type = "submit" class = "btn btn-warning" id = "btn_actualizar">
                        Actualizar registro
                    </button>
                </a>
                
            </div>

            <div class="mt-2">
                <a href="./templates/layouts/delete.php">
                    <button type = "submit" class = "btn btn-danger" id = "btn_borrar">
                        Borrar registro
                    </button>
                </a>
                
            </div>

        </div>
        
    </div>

    <?php include('./templates/_partials/foot.php'); ?>