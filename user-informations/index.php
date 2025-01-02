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
    <title>Document</title>
</head>
<body>
    <fieldset>
        <form action="register.php" method="POST">
            <label for="title">Titre de l'exercice</label>
            <input type="text" name="title" required>

            <label for="author">Auteur de l'exercice</label>
            <input type="text" name="author" required>

            <label for="date">Date de creation</label>
            <input type="date" name="date" required>

            <button type="submit">Envoyer</button>
        </form>
    </fieldset>

    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Titre</td>
                <td>Auteur</td>
                <td>Date</td>
                <td>Action</td>
            </tr>
        </thead>
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
                    echo "<tr><td colspan='5' class='text-center'>No data found</td></tr>";
                }
            ?>
        <tbody>

        </tbody>
    </table>


</body>
</html>