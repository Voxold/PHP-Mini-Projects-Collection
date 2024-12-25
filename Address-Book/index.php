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
            <th>
                <td>Nom</td>
                <td>Telephone</td>
                <td>Email</td>
                <td>Adress</td>
            </th>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    
<?php
?>
</body>
</html>