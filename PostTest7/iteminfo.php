<?php
    session_start();
    require "connection.php";

    if (!isset($_SESSION['login'])) {
        header("Location: formagain.php");
        exit;
    }

    $result = mysqli_query($conn, "SELECT * FROM regis");
    $regis = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $regis[] = $row;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Product Information</title>
        <link rel="stylesheet" href="store.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body>
        <nav class="navbar-add">
            <div class="logo">
                <a href="index.php"><img src="pokedolllogo.png" alt="#"></a>
            </div>
        </nav>
        <section class="froslass">
            <div class="center-content-froslass">
                <div class="text-box">
                    <h2>We're So Sorry</h2>
                    <p>You Can't Actually Buy These Cute Plushies</p>
                    <p>This Is Just A Silly Little Project</p>
                    <p>(ﾉ≧ڡ≦) Teehee~!</p>
                </div>
                <img id="froslass-image" src="froslass.png" alt="froslass">
                <audio id="froslass-cry" src="froslass.mp3" preload="auto"></audio>
            </div>
            <div class="click-froslass" id="clicklass"></div>  
        </section>
        <section class="back-store">
            <div>
                <button class="back-to"><a href="store.php"><h2>Back To Store</h2></a></button>
                <button class="back-to"><a href="logout.php" onClick="1"><h2>Log Out Before Leaving</h2></a></button>
            </div>
        </section>
        <script src="Script.js"></script>
    </body>
</html>