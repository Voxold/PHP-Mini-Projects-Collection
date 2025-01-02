<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM exercice WHERE id=?";

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
    <title>Document</title>
</head>
<body>
<fieldset>
        <form action="register.php" method="POST">
            <label for="title">Titre de l'exercice</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($row['titre']); ?>" required>

            <label for="author">Auteur de l'exercice</label>
            <input type="text" name="author" value="<?php echo htmlspecialchars($row['author']); ?>" required>

            <label for="date">Date de creation</label>
            <input type="date" name="date" value="<?php echo htmlspecialchars($row['date']); ?>" required>

            <button type="submit">Update</button>
        </form>
    </fieldset>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $author = $_POST['author'];
            $date = $_POST['date'];
        
            $updateQuery = "UPDATE exercice SET titre = ?, author = ?, date = ? WHERE id = ?";
            $updateStmt = $conn->prepare($updateQuery);
            $updateStmt->bind_param("si", $title, $author, $date, $id);
        
            if ($updateStmt->execute()) {
                header("Location: index.php");
                exit();
            }
        }
    ?>
</body>
</html>

