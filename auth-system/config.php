<?php
    $host = 'localhost';
    $dbname = 'auth_system';
    $username = 'root';
    $password = '';
    
    $conn = new PDO("mysql:host=$host; dbname=$dbname;", $username, $password);

    if ($conn == True) {
        echo "It's working!";
    }else{
        echo "There's error with connection!";
    }

?>