<?php

    $host = 'localhost';
    $user = 'root';
    $password = 'untels@scrum';
    $db = 'apushdb';

    $conection = @mysqli_connect($host,$user,$password,$db);

    if(!$conection){
        echo "Error conexión base de datos";
    }