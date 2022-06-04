<?php include('../_partials/head.php'); ?>

<div class = "container mt-4">
    <div class = "card">
        <div class = "card-header">
            <h2 class = "text-center">Bienvenido </h2>
        </div>
        <div class = "card-body">
            <h4 class = "text-center">Ingresa los datos por favor</h4>
            <form id="form" autocomplete="off" method="POST" action="../../request/request.php">
                
                <div class="form-row">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name ="nombre" id="nombre" placeholder="Ingresa el nombre" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Primer Apellido</label>
                        <input type="text" class="form-control" name ="apellido1" id="apellido1" placeholder="Ingresa el primer apellido" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Segundo Apellido</label>
                        <input type="text" class="form-control" name ="apellido2" id="apellido2" placeholder="Ingresa el segundo apellido" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Direccion</label>
                    <input type="text" class="form-control" name ="direccion" id="direccion" placeholder="Ingresa la dirección" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Municipio</label>
                        <input type="text" class="form-control" name ="municipio" id="municipio" placeholder="Ingresa el municipio" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Departamento</label>
                        <input type="text" class="form-control" name ="departamento" id="departamento" placeholder="Ingresa el segundo apellido" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Telefono</label>
                        <input type="text" class="form-control" name ="telefono" id="telefono" placeholder="Ingresa el numero de telefono" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Tipo</label>
                        <select name="tipo_telefono" id="tipo_telefono" class = "form-control">
                            <option value="1">Celular</option>
                            <option value="2">Casa</option>
                            <option value="3">Trabajo</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Correo</label>
                        <input type="text" class="form-control" name ="correo" id="correo" placeholder="Ingresa el correo" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Tipo</label>
                        <select name="tipo_correo" id="tipo_correo" class = "form-control">
                            <option value="1">Personal</option>
                            <option value="2">Trabajo</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Fecha de ingreso</label>
                        <input type="date" class="form-control" id="fecha" name = "fecha" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Salario Mensual</label>
                        <input type="number" class="form-control" name ="salario" id="salario" placeholder = "Ingresa el salario mensual" required>
                    </div>
                </div>
                <input type="submit" class="btn btn-info btn-block" value="Ingresar datos">
            </form>
            </div>
        </div>
    </div>
</div>

<?php include('../_partials/foot.php'); ?>