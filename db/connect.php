<?php
    $keys = array(
        "host" => "localhost",
        "user" => "root",
        "password" => "root",
        "database" => "mydb"
    );

    function connected()
    {
        global $keys;
        $conn = mysqli_connect(
            $keys['host'],
            $keys['user'],
            $keys['password'],
            $keys['database']
        );
        return $conn? "connected database": mysqli_connect_error(); 
    }