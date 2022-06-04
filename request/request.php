<?php
include('../db/querys.php');

$requestHttp = array(
    "nombre" => $_POST['nombre'],
    "apellido1" => $_POST['apellido1'],
    "apellido2" => $_POST['apellido2'],
    "direccion" => $_POST['direccion'],
    "municipio" => $_POST['municipio'],
    "departamento" => $_POST['direccion'],
    "telefono" => $_POST['telefono'],
    "tipo_telefono" => $_POST['tipo_telefono'],
    "correo" => $_POST['correo'],
    "tipo_correo" => $_POST['tipo_correo'],
    "fecha" => $_POST['fecha'],
    "salario" => $_POST['salario']
);

$verifyRequest = false;

foreach($requestHttp as $key => $value)
{
    if (!empty($value)) $verifyRequest = true;
}

if ($verifyRequest) add($requestHttp);
else header('Location: http://localhost:80/php-crud-mysql/', true, 401);