<?php
include('db.php');

// Registe informations
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nom = $_POST['nom'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];

    $query = "INSERT INTO book (nom, telephone, email, adress) VALUES ('$nom', '$telephone', '$email', '$adress')";
    if ($conn->query($query) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

?>
