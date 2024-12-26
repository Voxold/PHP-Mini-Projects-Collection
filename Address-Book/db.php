<?php
    // Database Connection
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'adressbook';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $nom = $_POST['nom'] ?? '';
        $telephone = $_POST['telephone'] ?? '';
        $email = $_POST['email'] ?? '';
        $adress = $_POST['adress'] ?? '';
    }
    
    // Insert database
    $insert_sql = "INSERT INTO book (nom, telephone, email, adress) VALUES ('$nom', '$telephone', '$email', '$adress')";
    $insert_result = $conn->query($insert_sql);

    $select_sql = "SELECT * FROM book";
    $select_result = $conn->query($select_sql);

     // close connection
     $conn->close();


?>