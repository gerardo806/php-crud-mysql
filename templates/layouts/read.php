<?php 
    //include('../../db/connect.php'); 
    include('../_partials/head.php');
    include('../../db/querys.php');
?>

<div class = "container mt-4">

    <?php if(isset($_SESSION['message'])){?>
        <div class="alert <?= $_SESSION['type_message'] ?> alert-dismissible fade show myt-3" role="alert">
            <strong>Nuevo mensaje!</strong> <?= $_SESSION['message']?>
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
                <?php
                 $employees = all();
                 if(!$employees) {
                ?>
                    <tbody>
                        <td> - </td>
                        <td> - </td>
                        <td> - </td>
                        <td> - </td>
                        <td> - </td>
                        <td> - </td>
                        <td> - </td>
                        <td> - </td>
                        <td> - </td>
                    </tbody>
                <?php 
                    }else{
                        global $employees;
                        while ($employee = mysqli_fetch_array($employees)){
                ?>
                    <tbody>
                        <td> <?= $employee['id_nombre']; ?> </td>
                        <td> 
                            <?php 
                                echo $employee['nombres'] . " ";
                                echo $employee['primer_apellido'] . " ";
                                echo $employee['segundo_apellido'];
                            ?> 
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
                <?php }} ?>
            </table>
        </div>
    </div>
</div>

<?php include('../_partials/foot.php'); ?>