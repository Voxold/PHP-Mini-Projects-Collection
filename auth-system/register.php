<?php require('includes/header.php'); ?>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

    }
?>

    <main class="form-signing w-50 m-auto">
        <form action="register.php" method="POST" class="d-flex flex-column rounded shadow p-5 mt-5">

            <h1 class="m-3 mt-5 fw-normal text-center">Registration</h1>

            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Your Username" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Your Email" required>
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="text" name="password" class="form-control" placeholder="Enter Your Password" required>
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Confirme Password</label>
                <input type="text" name="c-password" class="form-control" placeholder="Confirme You Passwrod" required>
            </div>
            

            <button type="submit" class="btn btn-primary">Register</button>

        </form>
    </main>

<?php require('includes/footer.php'); ?>