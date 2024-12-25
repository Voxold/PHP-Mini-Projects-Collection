<?php
    include('db.php');
    $select_sql = "SELECT * FROM book";
    $select_result = $conn->query($select_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="db.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom">

        <label for="nom">Telephone</label>
        <input type="text" name="telephone">

        <label for="nom">Email</label>
        <input type="text" name="email">

        <label for="nom">Adress</label>
        <input type="text" name="adress">

        <button type="submit">Register</button>
    </form>

    <div>
        <table>

            <thead>
                <th>
                    <td>ID</td>
                    <td>Nom</td>
                    <td>Telephone</td>
                    <td>Email</td>
                    <td>Adress</td>
                </th>
            </thead>

            <tbody>

                <?php
                    if ($select_result->num_rows > 0) {
                        while ($row = $select_result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['nom']}</td>
                                    <td>{$row['telephone']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['adress']}</td>
                                  </tr>";
                        }
                    }else{
                        echo "<tr><td colspan='4'>No data found</td></tr>";
                    }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>