<?php require('includes/header.php'); ?>
<?php require('config.php'); ?>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $logInfo = strtolower($_POST['log-info']);
        $logPassword = $_POST['log-password'];

        $query = "SELECT * FROM users WHERE email = :logInfo OR username= :logInfo";

        $stmt = $conn->prepare($query);
        

        $login->execute();

        $data = $login->fetch(PDO::FETCH_ASSOC);
    }

?>

    <main class="form-signing w-50 m-auto">
        <form action="login.php" method="POST" class="d-flex flex-column rounded shadow p-5 mt-5">

            <h1 class="m-3 mt-5 fw-normal text-center">Login</h1>

            <div class="mb-3">
                <label for="" class="form-label">Username Or Email</label>
                <input type="text" name="log-info" placeholder="Enter username or email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="text" name="log-password" placeholder="Enter password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>

        </form>
    </main>

<?php require('includes/footer.php'); ?>

