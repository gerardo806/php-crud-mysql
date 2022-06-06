<?php include('../../db/connect.php'); ?>
<?php include('../_partials/head.php'); ?>

<div class = "container mt-4">

    <?php if(isset($_SESSION['message'])){?>
        <div class="alert alert-primary alert-dismissible fade show myt-3" role="alert">
            <strong>Message!</strong> <?= $_SESSION['message']?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php session_unset(); }?>

    <div class = "card">
        <div class = "card-header">
            <h2 class = "text-center">Bienvenido</h2>
        </div>
        <div class = "card-body">
            <h4 class = "text-center">Estos son los datos que tenemos en nuestra base de datos</h4>
            <table class = "table">
                <thead>
                    <tr>
                        <th>Nombre completo</th>
                        <th>Direccion</th>
                        <th>Telefonos</th>
                        <th>Correo</th>
                        <th>Fecha de ingreso</th>
                        <th>Salario mensual</th>
                    </tr>
                </thead>

                <?php

                /*
                $consulta = (
                    'select
                        concat_ws(' ', n.nombres, n.primer_apellido, n.segundo_apellido) nombre,
                        concat_ws(' ', d.complemento, m.municipio, dp.departamento) direccion,
                        (
                            select
                                group_concat(t.numero separator ' / ')
                            from telefono t
                                where t.id_empleado = e.id_empleado
                        ) telefono,
                        (
                            select
                                group_concat(c.correo separator ' / ')
                            from correo c
                                where t.id_empleado = e.id_empleado
                        ) correo,
                        e.fecha_ingreso,
                        e.salario_mensual
                    from nombre n
                        inner join empleado e
                            on n.id_empleado = e.id_empleado
                        inner join direccion d
                            on d.id_empleado = e.id_empleado
                        inner join municipio m
                            on m.id_municipio = d.id_municipio
                        inner join departamento dp
                            on dp.id_departamento = m.id_departamento
                    inner join correo c
                            on c.id_empleado =     e.id_empleado'

                );

               */ ?>

            </table>
        </div>
    </div>
</div>

<?php include('../_partials/foot.php'); ?>