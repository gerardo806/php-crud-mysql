<?php
//include('../../db/connect.php'); 
include('../_partials/head.php');
include('../../db/querys.php');
?>

<div class="container mt-4">

    <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert <?= $_SESSION['type_message'] ?> alert-dismissible fade show myt-3" role="alert">
            <strong>Nuevo mensaje!</strong> <?= $_SESSION['message'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php session_unset();
    } ?>

    <div class="card">
        <div class="card-header">
            <h2 class="text-center">EMPLEADOS</h2>
        </div>
        <div class="card-body">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand">BUSCAR EMPLEADO</a>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </nav>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre completo</th>
                        <th>Direccion</th>
                        <th>Telefonos</th>
                        <th>Correo</th>
                        <th>Fecha de ingreso</th>
                        <th>Salario mensual</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $employees = all();
                    if (!$employees) {
                    ?>
                        <tr>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                        </tr>
                        <?php
                    } else {
                        global $employees;
                        while ($employee = mysqli_fetch_array($employees)) {
                        ?>
                            <tr>
                                <td> <?= $employee['id_nombre']; ?> </td>
                                <td>
                                    <?= $employee['nombres']; ?>
                                    <?= $employee['primer_apellido']; ?>
                                    <?= $employee['segundo_apellido']; ?>
                                </td>
                                <td> <?= $employee['complemento']; ?> </td>
                                <td> <?= $employee['numero']; ?> </td>
                                <td> <?= $employee['correo']; ?> </td>
                                <td> <?= $employee['fecha_ingreso']; ?> </td>
                                <td> <?= $employee['salario_mensual']; ?> </td>
                                <td>
                                    <a class="btn btn-secondary" href="#">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="#">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('../_partials/foot.php'); ?>