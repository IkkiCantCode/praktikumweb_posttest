<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> About Me </title>
        <link rel="stylesheet" href="styleme.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body class="light-mode">
        <nav class="navbar">
            <div class="logo">
                <a href="index.php"><img src="pokedolllogo.png" alt="#"></a>
            </div>
            <div class="aboutme">
                <a class="main-page" href="aboutme.php"> About Me </a>
            </div>
            <div class="nav-items">
                <a class="link" href="index.php"> Home </a>
                <a class="link-active" href="aboutme.php"> About Me </a>
                <a class="link" href="limited.php"> Limited Items</a>
                <a class="link" href="store.php"> Store </a>
                <a class="link" onclick="showAlert()" href="#" id="cart-link"> Shopping Cart </a>
                <a class="link" onclick="showAlert()" href="#" id="pokedex-link"> Pokedex </a>
                <button class="link-active">
                    <a href="profile.php">
                        Profile
                    </a>
                </button>
                <img id="toggle-mode" src="sun.png" alt="">
            </div>
        </nav>
        <section class="hero">
            <img class="hero-img" src="water.png" alt="wbg">
            <div class="boutme">
            <h1 style="text-align:center"> About Me</h1>
                <div class="dif">
                    <div class="ket">
                        <div class="about-me">
                            <div class="nama">
                                <img class="ardhifa-image" src="anastasia.jpg" alt="">
                                <div class="bio">
                                    <p> Muhammad Rizky Aulia </p>
                                    <p> 2209106067 </p>
                                    <p> Informatika B 22</p>
                                </div>
                            </div>
                            <div class="intro">
                                <div class="intro-wrapper">
                                    <h1> Hi, Im Professor Ikki</h1>
                                    <p> This Is The Place Where You Can Get Your Favourite Pokemon </p>
                                    <p> (In Doll Forms Of course) </p>
                                    <p> Also, Here's My Favourite Pokemon Rowlet </p>
                                </div>
                                <img id="rowletImage" src="rowlet.png" alt="Rowlet Image">
                                <audio id="rowletAudio" src="rowlet.mp3"></audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        <footer class="foot">
            <p> Please Nintendo Don't Sue Me, This Is Just For a College Project </p>
            <p> Contact Person : mrizkynoob@gmail.com </p>
        </footer>
        <script src="Script.js"></script>
    </body>
</html>