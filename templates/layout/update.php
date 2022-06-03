<?php include('./templates/_partials/head.php'); ?>

<main class="container mt-4">
<div class="row d-flex justify-content-center">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Bienvenido</h2>
            </div>
            <div class="card-body">
                <h4 class="text-center">Ingresa los datos que actualizaras</h4>
                <form id="form" autocomplete="off" method="POST">

                    <div class="form-row">
                        <label>
                            Nombre
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa el nombre">
                        </label>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Primer Apellido</label>
                            <input type="text" class="form-control" name="apellido1" id="apellido1" placeholder="Ingresa el primer apellido">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Segundo Apellido</label>
                            <input type="text" class="form-control" name="apellido2" id="apellido2" placeholder="Ingresa el segundo apellido">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Direccion</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingresa la dirección">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Estado</label>
                            <select name="estado_direccion" id="estado_direccion" class="form-control">
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Municipio</label>
                            <input type="text" class="form-control" name="municipio" id="municipio" placeholder="Ingresa el municipio">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Departamento</label>
                            <input type="text" class="form-control" name="departamento" id="departamento" placeholder="Ingresa el segundo apellido">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingresa el numero de telefono">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Tipo</label>
                            <select name="tipo_telefono" id="tipo_telefono" class="form-control">
                                <option value="1">Celular</option>
                                <option value="2">Casa</option>
                                <option value="3">Trabajo</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Estado</label>
                            <select name="estado_telefono" id="estado_telefono" class="form-control">
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Correo</label>
                            <input type="text" class="form-control" name="correo" id="correo" placeholder="Ingresa el correo">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Tipo</label>
                            <select name="tipo_correo" id="tipo_correo" class="form-control">
                                <option value="1">Personal</option>
                                <option value="2">Trabajo</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Estado</label>
                            <select name="estado_correo" id="estado_correo" class="form-control">
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Fecha de ingreso</label>
                            <input type="date" class="form-control" id="fecha" name="fecha">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Salario Mensual</label>
                            <input type="text" class="form-control" name="salario" id="salario" placeholder="Ingresa el salario mensual">
                        </div>
                    </div>

                    <input type="submit" class="btn btn-info btn-block" value="Actualizar datos">
                </form>
            </div>
        </div>
    </div>
</div>
</main>

<?php include('./templates/_partials/foot.php'); ?>