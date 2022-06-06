<?php
include('connect.php');

$conn = connected();

//variables global
$id_empleado;
$id_departamento;
$id_municipio;

function table1($array_date)
{
    global $conn;
    $fecha = $array_date['fecha'];
    $salario = $array_date['salario'];

    $empleado = "INSERT INTO empleado(fecha_ingreso, salario_mensual)" .
            "VALUES ('$fecha', $salario)";

    $query = mysqli_query($conn, $empleado);
    return !$query? die("ERROR: table empleado"): mysqli_insert_id($conn);
}

function table2($array_date)
{
    global $conn;
    global $id_empleado;
    $id_empleado = table1($array_date);

    $nombres = $array_date['nombre'];
    $apellido1 = $array_date['apellido1'];
    $apellido2 = $array_date['apellido2'];

    $nombre = "INSERT INTO nombre(nombres, primer_apellido, segundo_apellido, id_empleado)" .
            "VALUES ('$nombres', '$apellido1', '$apellido2', $id_empleado)";

    $query = mysqli_query($conn, $nombre);
    return !$query? die("ERROR: table nombre"):  mysqli_insert_id($conn);
}

function table3($array_date)
{
    global $conn;
    global $id_empleado;

    $email = $array_date['correo'];
    $tipo = $array_date['tipo_correo'];

    $correo = "INSERT INTO correo(correo, tipo, estado, id_empleado)" .
            "VALUES ('$email', '$tipo', 'ACTIVO', $id_empleado)";
               
    $query = mysqli_query($conn, $correo);
    return !$query? die("ERROR: table correo"): mysqli_insert_id($conn);
}

function table4($array_date)
{
    global $conn;
    global $id_empleado;

    $telefono = $array_date['telefono'];
    $tipo = $array_date['tipo_telefono'];

    $telefono = "INSERT INTO telefono(numero, tipo, estado, id_datos_persona) " .
            "VALUES ('$telefono', '$tipo', 'ACTIVO', $id_empleado)";

    $query = mysqli_query($conn, $telefono);
    return !$query? die("ERROR: table telefono"): mysqli_insert_id($conn);
}

function table5($array_date)
{
    global $conn;
    $departamento = $array_date['departamento'];

    $dpt = "INSERT INTO departamento(departamento)" .
            "VALUES ('$departamento')";

    $query = mysqli_query($conn, $dpt);
    return !$query? die("ERROR: table departamento"): mysqli_insert_id($conn);
}

function table6($array_date)
{
    global $conn;
    global $id_departamento;

    $id_departamento = table5($array_date);
    $municipio = $array_date['municipio'];

    $municipio = "INSERT INTO municipio(municipio, id_departamento)" .
            "VALUES ('$municipio', $id_departamento)";
    
    $query = mysqli_query($conn, $municipio);
    return !$query? die("ERROR: table municipio"): mysqli_insert_id($conn);
}

function table7($array_date)
{
    global $conn;
    global $id_municipio;
    global $id_empleado;

    $id_municipio = table6($array_date);
    $direccion = $array_date['direccion'];

    $direccion = "INSERT INTO direccion(complemento, estado, id_municipio, id_empleado)" .
            "VALUES ('$direccion', 'ACTIVO', $id_municipio, $id_empleado)"; 
       
    $query = mysqli_query($conn, $direccion);
    return !$query? die("ERROR: table direccion"): mysqli_insert_id($conn);   
}

function add($array_date){
    $query1 = table2($array_date) ."<br>";
    $query2 = table3($array_date)."<br>";
    $query3 = table4($array_date)."<br>";
    $query4 = table7($array_date)."<br>";

    $verifyQuerys = false;
    if (!empty($query1) or !empty($query2) or !empty($query3) or !empty($query4))
    {
        $verifyQuerys = true;
    }

    if ($verifyQuerys)
    {
        $_SESSION['message'] = "Registro guardado satisfactoriamente!";
        $_SESSION['type_message'] = "alert-success";
    }
    else
    {
        $_SESSION['message'] = "Hubo un error al insertar el registro";
        $_SESSION['type_message'] = "alert-danger";
    }
    
    $url = "http://localhost:80/php-crud-mysql/templates/layouts/read.php";
    header("Location: $url");
    exit();
}



function all()
{
    global $conn;
    $employees = "
        SELECT
        id_nombre,
        nombres,
        primer_apellido,
        segundo_apellido,
        complemento, 
        numero,
        correo,
        fecha_ingreso,
        salario_mensual
    FROM
        nombre
        INNER JOIN empleado 
            ON nombre.id_empleado = empleado.id_empleado
        INNER JOIN direccion 
            ON nombre.id_empleado = direccion.id_empleado
        INNER JOIN telefono 
            ON empleado.id_empleado = telefono.id_datos_persona
        INNER JOIN correo 
            ON empleado.id_empleado = correo.id_empleado
    ";
    return mysqli_query($conn, $employees);
}

function remove()
{}

function edit()
{}