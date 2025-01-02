<?php
include('db.php');
include('register.php');
include('delete.php');

$query = "SELECT * FROM exercice";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Manager</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Exercise Manager</h1>
        
        <fieldset class="border p-4 mb-4">
            <legend class="float-none w-auto px-2">Add New Exercise</legend>
            <form action="register.php" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Titre de l'exercice</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Auteur de l'exercice</label>
                    <input type="text" name="author" id="author" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date de création</label>
                    <input type="date" name="date" id="date" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </fieldset>

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    foreach ($result as $row) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['titre']}</td>
                                <td>{$row['author']}</td>
                                <td>{$row['date']}</td>
                                <td class='text-center'>
                                    <a href='edit.php?id={$row['id']}' class='btn btn-sm btn-warning'>Modifier</a>
                                    <a href='delete.php?id={$row['id']}' class='btn btn-sm btn-danger'>Supprimer</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Aucune donnée trouvée</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
