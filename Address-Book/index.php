<?php
    include('db.php');
    $query = "SELECT * FROM book";
    $select_result = $conn->query($query)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form and Table</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Address-Book/style.css">
</head>
<body>
    <div class="container">
        <div class="form-container mb-4 mt-5">

            <h2 class="mb-3">Register</h2>
            <form action="register.php" method="post" class="row g-3">
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="col-md-6">
                    <label for="telephone" class="form-label">Telephone</label>
                    <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Enter your phone" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="col-md-6">
                    <label for="adress" class="form-label">Address</label>
                    <input type="text" name="adress" id="adress" class="form-control" placeholder="Enter your address" required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary w-50">Register</button>
                </div>
            </form>

        </div>

        <div class="table-container">
            <h2 class="mb-3">Registered Users</h2>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($select_result->num_rows > 0) {
                            foreach ($select_result as $row) {
                                echo "<tr>
                                        <td>{$row['id']}</td>
                                        <td>{$row['nom']}</td>
                                        <td>{$row['telephone']}</td>
                                        <td>{$row['email']}</td>
                                        <td>{$row['adress']}</td>
                                      </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center'>No data found</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
