<?php
    require "connection.php";
    if (isset($_POST["user"])){
        $username = strtolower($_POST["username"]);
        $pass = $_POST["password"];
        $cpassword = $_POST["cpassword"];;

        if ($pass == $cpassword){
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

            if (mysqli_fetch_assoc($result)){
                echo "
                    <script>
                        alert('Username telah Digunakan');
                        document.location.href = 'registagain.php';
                    </script>
                    ";
            } else {
                $sql = "INSERT INTO user VALUES ('', '$username', '$pass')";
                $result = mysqli_query($conn, $sql);

                if (mysqli_affected_rows($conn) > 0){
                    echo "
                    <script>
                        alert('Registrasi Berhasil');
                        document.location.href = 'formagain.php';
                    </script>
                    ";
                } else {
                    echo "
                    <script>
                        alert('Registrasi Gagal');
                        document.location.href = 'registagain.php';
                    </script>
                    ";
                }
            }
        } else {
            echo "
            <script>
                alert('Password Tidak Sama');
                document.location.href = 'registagain.php';
            </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
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
                <h1>Registration Form</h1><hr>
                <form action="" method="POST">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" placeholder="Username" autocomplete="on" class="textfield" required>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" autocomplete="on" class="textfield" required>
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="password" id="cpassword" name="cpassword" id="cpassword" placeholder="Confirm Password" autocomplete="on" class="textfield" required>
                    <button type="submit" name="user" class="login-btn"> Register </button>
                    <div class="remember">
                        <input type="checkbox" id="remember" name="remember" value="true">
                        <label for="remember">Ingat username ini</label>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
