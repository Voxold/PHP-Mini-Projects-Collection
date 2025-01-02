<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $date = $_POST['date'];

    $query = "INSERT INTO exercice (titre, author, date) VALUES ('$title', '$author', '$date')";

    if ($conn->query($query) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

?>