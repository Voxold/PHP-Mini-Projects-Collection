<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM exercice WHERE id = ?";
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $date = $_POST['date'];

    $updateQuery = "UPDATE exercice SET titre = ?, author = ?, date = ? WHERE id = ?";
    $updateStmt = $conn->prepare($updateQuery);
    $updateStmt->bind_param("sssi", $title, $author, $date, $id);

    if ($updateStmt->execute()) {
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifie Exercise</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Modifie Exercise</h1>
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titre de l'exercice</label>
                        <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($row['titre']); ?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Auteur de l'exercice</label>
                        <input type="text" name="author" id="author" value="<?php echo htmlspecialchars($row['author']); ?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date de création</label>
                        <input type="date" name="date" id="date" value="<?php echo htmlspecialchars($row['date']); ?>" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
