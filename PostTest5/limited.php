<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> Pokedolls Limited Items </title> 
        <link rel="stylesheet" href="limited.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body class="light-mode">
        <nav class="navbar">
            <div class="logo">
                <a href="index.php"><img src="pokedolllogo.png" alt="#"></a>
            </div>
            <div class="aboutme">
                <a class="main-page" href="limited.php"> LIMITED TIME! </a>
            </div>
            <div class="nav-items">
                <a class="link" href="index.php"> Home </a>
                <a class="link" href="aboutme.php"> About Me </a>
                <a class="link-active" href="limited.php"> Limited Items</a>
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
        <section class="content">
            <div class="content-information">
                <img class="content-image" src="chandelure.png" alt="">
                <div class="card" id="card">
                    <div class="information">
                        <h1> Here Is All The Limited Items Available </h1>
                        <p> Get Them Now Before It's Too Late </p>
                        <p> Once it's Gone, They're Gone Forever </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="limited-section">
            <div class="limited-title">
                <h3 class="color-cycling"> Available Now ! ! !</h3>
            </div>
            <div class="limited-container">
                <div class="limited-card">
                    <div class="limited-img">
                        <img src="piplupmain.png" alt="piplup" id="piplup-image">
                    </div>
                </div>
            <div class="plushlimit-title">
                <h3 class="pip-inch"> 31 INCHES TALL PIPLUP PLUSH IS HERE !!!</h3>
            </div>
            </div>
        </section>
        <section class="double-section">
            <div class="double-container">
                <div class="double-card">
                    <div class="double-img">
                        <img class="pipimg1" src="piplup2.jpg" alt="Left Image">
                    </div>
                    <div class="double-text">
                        <h3 class="fitting"> If Piplup Fits, Piplup Sits </h3>
                        <p class="pip-desc" style="display: none;">Big news for Piplup fans! Arriving as a jumbo plush, 
                            this version of the Water-type first partner Pokémon from Sinnoh is here to join your home decor! 
                            At 31 inches tall, this huge, incredibly soft Piplup plush looks great in offices, 
                            living rooms, or game rooms. Not only is it a great conversation starter it's also big enough 
                            to be hugged and cuddled by everyone!. So get your Big Piplup Plush before it sold out,
                        once it's sold out, It will never be restocked ever again</p>
                    </div>
                </div>
                <div class="double-card">
                    <div class="double-text">
                        <h3 class="fitting"> About The Plush </h3>
                        <ul class="pip-about" style="display: none;">
                            <li>Measures about 31 inches tall and 19 ½ inches long</li>
                            <li>A great decoration for any room or office</li>
                            <li>Item Dimensions: 31 x 17.7 x 31 IN</li>
                            <li>Materials: 100% polyester</li>
                            <li>Care Instructions: Surface Wash Only</li>
                            <li>Item Weight: 144.6 OZ</li>
                        </ul>
                    </div>
                    <div class="double-img">
                        <img class="pipimg2" src="piplup1.jpg" alt="Right Image">
                    </div>
                </div>
            </div>
            <div class="preorder-button">
                <button>Pre-Order Now</button>
            </div>
        </section>     
        <footer>
            <p> Please Nintendo Don't Sue Me, This Is Just For a College Project </p>
            <p> Contact Person : mrizkynoob@gmail.com </p>
        </footer>
        <script src="Script.js"></script>
    </body>
</html>