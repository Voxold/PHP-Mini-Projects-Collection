<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $task = $_POST['task'];
    $query = "INSERT INTO task_manager (task) VALUES ('$task')";

    if ($conn->query($query) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>