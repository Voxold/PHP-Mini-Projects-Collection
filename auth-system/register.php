<?php require('includes/header.php'); ?>
<?php require('includes/footer.php'); ?>
<?php require('config.php'); ?>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $error = '';
        if ($_POST['password'] !== $_POST['c-password']){
            $error = 'Passwords do not match!';
        }else{
            $username = strtolower($_POST['username']) ;
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $date = new DateTime();
            $formattedDate = $date->format('Y-m-d H:i:s');

            try {
                $query = "INSERT INTO users (username,email,password,date_created) VALUES (:username, :email, :password, :date_created)";

                $insert = $conn->prepare($query);
                $insert->execute([
                        ':username' => $username,
                        ':email' => $email,
                        ':password' => $password,
                        ':date_created' => date('Y-m-d H:i:s')
                ]);

                // Redirect to login page
                header("Location: login.php");
                echo 'User registered successfully!';
                exit();
                    
            }catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
        
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
                <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required><br>
                <!-- Display error message -->
                <?php if ($error): ?>
                        <p class="text-danger"><?= $error ?></p>
                <?php endif; ?>
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Confirme Password</label>
                <input type="password" name="c-password" class="form-control" placeholder="Confirme You Passwrod" required>
                <!-- Display error message -->
                <?php if ($error): ?>
                        <p class="text-danger"><?= $error ?></p>
                <?php endif; ?>
            </div>
            

            <button type="submit" class="btn btn-primary">Register</button>

        </form>
    </main>

    <?php

    ?>

<?php require('includes/footer.php'); ?>