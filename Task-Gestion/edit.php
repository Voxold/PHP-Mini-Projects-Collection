<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM task_manager WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Task not found.";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une Tâche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="form-container mx-auto" style="max-width: 500px;">
            <h2 class="text-center mb-4">Modifier une Tâche</h2>
            <form method="POST" action="" class="row g-3">
                <div class="col-12">
                    <label for="task" class="form-label">Nom</label>
                    <input type="text" name="task" id="task" class="form-control" value="<?php echo htmlspecialchars($row['task']); ?>" required>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success w-100">Enregistrer les Modifications</button>
                    <a href="index.php" class="btn btn-secondary w-100 mt-2">Annuler</a>
                </div>
            </form>
        </div>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $task = $_POST['task'];
        
            $updateQuery = "UPDATE task_manager SET task = ? WHERE id = ?";
            $updateStmt = $conn->prepare($updateQuery);
            $updateStmt->bind_param("si", $task, $id);
        
            if ($updateStmt->execute()) {
                header("Location: index.php");
                exit();
            }
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
