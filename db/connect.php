<?php

session_start();

function connected()
{
    global $keys;
    $conn = mysqli_connect(
        "localhost",
        "root",
        "root",
        "mydb"
    );
    return $conn? $conn: mysqli_connect_error(); 
}
