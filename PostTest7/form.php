<?php
    session_start();
    require "connection.php";

    if (isset($_POST["masuk"])){
        $username = strtolower($_POST["username"]);
        $pass = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM regis WHERE username = '$username'");

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);

            if (password_verify($pass, $row['password'])) {
                $_SESSION['login'] = true;
                header("Location: dashboard.php");
                exit;
            }
            
        }
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <nav class="navbar-add">
            <div class="logo">
                <a href="index.php"><img src="pokedolllogo.png" alt="#"></a>
            </div>
    </nav>
    <section class="log">
        <div class="form">
            <div class="form-container">
                <h1>Log In Form</h1><hr>
                <?php 
                    if (isset($error)) {
                        echo "<p style='color : red;'>Username atau Password Salah</p>";
                    }
                ?>
    
                <form action="" method="POST">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" placeholder="Username" autocomplete="on" class="textfield" required>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" autocomplete="on" class="textfield" required>
                    <div class="remember">
                        <h5>New Admin? Register Now!</h5>
                        <a href="regist.php">Register</a>
                    </div>
                    <input type="submit" name="masuk" value="Masuk" class="login-btn">
                </form>
            </div>
        </div>
    </section>
</body>
</html>