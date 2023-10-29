<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> Store </title> 
        <link rel="stylesheet" href="store.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico"> 
    </head>
    <body class="light-mode">
        <nav class="navbar">
            <div class="logo">
                <a href="index.php"><img src="pokedolllogo.png" alt="#"></a>
            </div>
            <div class="aboutme">
                <a class="main-page" href="store.php"> STORE </a>
            </div>
            <div class="nav-items">
                <a class="link" href="index.php"> Home </a>
                <a class="link" href="aboutme.php"> About Me </a>
                <a class="link" href="limited.php"> Limited Items</a>
                <a class="link-active" href="store.php"> Store </a>
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
        <section class="section-store">
            <button class="link-button"><a href="dashboard.php">Dashboard</a></button>
        </section>
        <section class="section-store-again">
            <div class="center-content">
                <img id="litwick-image" src="litwick.png" alt="litwick">
                <audio id="litwick-cry" src="litwickcry.mp3" preload="auto"></audio>
                <div class="text-box">
                    <h2>Hello, I'm Litwick</h2>
                    <p>And Welcome To The Store Page !</p>
                </div>
            </div>
            <div class="click-litwick" id="clickwick"></div>  
        </section>
        <section class="storeview">
            <div class="product-cards">
                <?php
                $host = 'localhost';
                $dbname = 'product';
                $username = 'root';
                $password = '';

                $conn = new mysqli($host, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $query = "SELECT * FROM products";
                $result = $conn->query($query);

                while ($row = $result->fetch_assoc()) {
                    $productimage = $row ['product_image'];
                    echo '<div class="product-card">';
                    echo "<img src='$productimage'>";
                    echo '<h3>' . $row['product_name'] . '</h3>';
                    echo '<p>Product Type: ' . $row['product_type'] . '</p>';
                    echo '<p>Price: $' . $row['product_price'] . '</p>';
                    echo '<p>Description: ' . $row['product_description'] . '</p>';
                    echo '<p>In Stock: ' . $row['product_stock'] . '</p>';
                    echo '<button class="button-store1"> <a class="button-store2" href="iteminfo.php"> Buy Now </a></button> ';
                    echo '</div>';
                }
                ?>
            </div>
        </section>
        <footer>
            <p> Please Nintendo Don't Sue Me, This Is Just For a College Project </p>
            <p> Contact Person : mrizkynoob@gmail.com </p>
        </footer>
        <script src="Script.js"></script>
    </body>
</html>