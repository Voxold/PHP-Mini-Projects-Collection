<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "DELETE FROM task_manager WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect back to the main page
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

} else {
    echo "Invalid request.";
}
?>
