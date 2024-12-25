<?php

$nom = $_POST['nom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$adress = $_POST['adress'];

// Database Connection
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'adressbook';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO book (nom, telephone, email, adress) VALUES ('$nom', '$telephone', '$email', '$adress')";

if ($conn->query($sql) === true) {
    echo "Create Succesfully";
}else{
    echo "error";
}

?>