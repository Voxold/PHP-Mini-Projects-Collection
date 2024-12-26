<?php
    include('db.php');
    include('register.php');

    $query = "SELECT * FROM task_manager";
    $result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionnaire de Tâches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Task-Gestion/style.css">
</head>
<body>
    <div class="container py-5">
        <div class="form-container mx-auto mb-4" style="max-width: 500px;">
            <h2 class="text-center mb-3">Gestionnaire de Tâches</h2>
            <form action="register.php" method="POST" class="row g-3">
                <div class="col-12">
                    <label for="task" class="form-label">Nom</label>
                    <input type="text" name="task" id="task" class="form-control" required>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary w-100">Ajouter Tâche</button>
                </div>
            </form>
        </div>

        <div>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Tâches</th>
                        <th scope="col">Modification</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($result->num_rows > 0) {
                            foreach ($result as $row) {
                                echo "<tr>
                                        <td>{$row['task']}</td>
                                        <td class='text-center'>
                                            <a href='edit.php?id={$row['id']}' class='btn btn-sm btn-warning'>Modifier</a>
                                            <a href='delete.php?id={$row['id']}' class='btn btn-sm btn-danger'>Supprimer</a>
                                        </td>
                                      </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='2' class='text-center'>Aucune donnée trouvée</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
