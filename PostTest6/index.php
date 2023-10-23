<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> Pokedolls </title> 
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico">  
    </head>
    <body class="light-mode">
        <nav class="navbar">
            <div class="logo">
                <a href="index.php"><img src="pokedolllogo.png" alt="#"></a>
            </div>
            <div class="aboutme">
                <a class="main-page" href="index.php"> POKEDOLLS </a>
            </div>
            <div class="nav-items">
                <a class="link-active" href="index.php"> Home </a>
                <a class="link" href="aboutme.php"> About Me </a>
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
            <div class="img-content">
                <img class="hero-img" src="pokedollshero.jpg" alt="">
                <img class="hero-img" src="pokeplushhero.jpeg" alt="">
                <img class="hero-img" src="pokedollcorousel.jpg" alt="">
                <div class="img-center img-display-bottommiddle">
                    <div class="img-left" onclick="plusdivs(-1)">&#10094;</div>
                    <div class="img-right" onclick="plusdivs(1)">&#10095;</div>
                </div>
            </div>
            <div class="hero-title">
                <h1> WELCOME TO POKEDOLLS </h1>
                <p> Plush, Dolls & Keychains </p>
            </div>
        </section>        
        <section class="content">
            <div class="content-information">
                <img class="content-image" src="chandelure.png" alt="">
                <div class="card" id="card">
                    <div class="information">
                        <h1> Hello, I'm Chandler the Chandelure </h1>
                        <p> And Welcome to Pokedolls</p>
                        <p> Buy Our Plushies Or I Will Drain Your Soul </p>
                    </div>
                    <div class="click-overlay" id="clickoverlay">
                        <p>Click to Talk to Me</p>
                    </div>
                </div>
            </div>
            <audio id="chandlercry" src="chandelure.mp3"></audio>
        </section>        
        <section class="shoppage-plush">
            <div class="product-title">
                <h1 class="plushie"> Plushies </h1>
                <p> Soft, Small And Cute </p>
            </div>
            <div class="plush-container">
                <div class="plush-card">
                    <div class="plush-img">
                        <img src="wooperdoll.png" alt="wooper">
                    <div class="plush-text">
                        <h3> Wooper Plushie </h3>
                        <h2> $9.99 </h2>
                    </div>
                    <div class="plush-button">
                        <button> BUY NOW </button>
                    </div>
                    </div>
                </div>
                <div class="plush-card">
                    <div class="plush-img">
                        <img src="gardevoirdoll.png" alt="gardevoir">
                    <div class="plush-text">
                        <h3> Gardevoir Plushie </h3>
                        <h2> $19.99 </h2>
                    </div>
                    <div class="plush-button">
                        <button> BUY NOW </button>
                    </div>
                    </div>
                </div>
                <div class="plush-card">
                    <div class="plush-img">
                        <img src="pikachudoll.png" alt="pikachu">
                    <div class="plush-text">
                        <h3> Pikachu Plushie </h3>
                        <h2> $5.99 </h2>
                    </div>
                    <div class="plush-button">
                        <button> BUY NOW </button>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shoppage-doll">
            <div class="product-title">
                <h1 class="dolls"> Dolls </h1>
                <p> Less Soft Than Plushies, Still Huggable </p>
            </div>
            <div class="doll-container">
                <div class="doll-card">
                    <div class="doll-img">
                        <img src="rowletdoll.png" alt="rowlet">
                    </div>
                    <div class="doll-text">
                        <h3> Rowlet Doll </h3>
                        <h2> $12.99</h2>
                    </div>
                    <div class="doll-button">
                        <button> BUY NOW </button>
                    </div>
                </div>
                <div class="doll-card">
                    <div class="doll-img">
                        <img src="gengardoll.png" alt="gengar">
                    </div>
                    <div class="doll-text">
                        <h3> Gengar Doll </h3>
                        <h2> $14.99</h2>
                    </div>
                    <div class="doll-button">
                        <button> BUY NOW </button>
                    </div>
                </div>
                <div class="doll-card">
                    <div class="doll-img">
                        <img src="genesectdoll.png" alt="genesect">
                    </div>
                    <div class="doll-text">
                        <h3> Genesect Doll </h3>
                        <h2> $15.99</h2>
                    </div>
                    <div class="doll-button">
                        <button> BUY NOW </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="shoppage-keychain">
            <div class="product-title">
                <h1> Keychains </h1>
                <p> Strap Your Keys With Cute & Soft Keychains </p>
            </div>
            <div class="keychain-container">
                <div class="keychain-card">
                    <div class="keychain-img">
                        <img src="littendoll.png" alt="litten">
                    </div>
                    <div class="keychain-text">
                        <h3> Litten Keychain </h3>
                        <h2> $5.99 </h2>
                    </div>
                    <div class="keychain-button">
                        <button> BUY NOW </button>
                    </div>  
                </div>
                <div class="keychain-card">
                    <div class="keychain-img">
                        <img src="litwickdoll.png" alt="litwick">
                    </div>
                    <div class="keychain-text">
                        <h3> Litwick Keychain </h3>
                        <h2> $10.99 </h2>
                    </div>
                    <div class="keychain-button">
                        <button> BUY NOW </button>
                    </div>  
                </div>
                <div class="keychain-card">
                    <div class="keychain-img">
                        <img src="mareepdoll.png" alt="mareep">
                    </div>
                    <div class="keychain-text">
                        <h3> Mareep Keychain </h3>
                        <h2> $2.99 </h2>
                    </div>
                    <div class="keychain-button">
                        <button> BUY NOW </button>
                    </div>  
                </div>
            </div>
        </section>
        <section class="coming-soon">
                <div class="cs-text">
                    <h1> COMING SOON </h1>
                    <p> Action Figure, Pins, Bigger Plushies And Many More </p>
                </div>
        </section>
        <footer>
            <p> Please Nintendo Don't Sue Me, This Is Just For a College Project </p>
            <p> Contact Person : mrizkynoob@gmail.com </p>
        </footer>
        <script src="Script.js"></script>
    </body>
</html>
