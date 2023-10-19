<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard</title>
        <link rel="stylesheet" href="store.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body class="light-mode">
        <nav class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="pokedolllogo.png" alt="#"></a>
                </div>
                <div class="aboutme">
                    <a class="main-page" href="dashboard.php"> Dashboard </a>
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
        <section class="section-dash">
            <button class="link-button"><a href="store.php">Back</a></button>
            <button class="link-button"><a href="addproduct.php">Add Product</a></button>
        </section>
        <section class="lampents">
            <div class="center-content-lampent">
                <img id="lampent-image" src="lampent.png" alt="lampent">
                <audio id="lampent-cry" src="lampentcry.mp3" preload="auto"></audio>
                <div class="text-box">
                    <h2>Hai, Lampent Here</h2>
                    <p>Right Now You're On The Dahsboard Menu!</p>
                </div>
            </div>
            <div class="click-lampent" id="clickpent"></div>  
        </section>
        <section class="storeview">
            <div class="product-cards">
                <?php
                require "connection.php";

                $query = "SELECT * FROM products";
                $result = $conn->query($query);

                while ($row = $result->fetch_assoc()) {
                    $productimage = $row ['product_image'];
                    echo '<div class="product-card">';
                    echo "<img src='$productimage'>";
                    echo '<h3>' . $row['product_name'] . '</h3>';
                    echo '<p>Product Type: ' . $row['product_type'] . '</p>';
                    echo '<p>Price: $' . $row['product_price'] . '</p>';
                    echo '<p>In Stock: ' . $row['product_stock'] . '</p>';
                    echo '<form action="editproduct.php" method="post">';
                    echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                    echo '<button class="button-dash" type="submit" name="edit-product">Edit</button>';
                    echo '</form>';
                    echo '<form action="deleteproduct.php" method="post">';
                    echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                    echo '<button class="button-dash" type="submit" name="delete-product">Delete</button>';
                    echo '</form>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>
        <footer>
            <p>Please Nintendo Don't Sue Me, This Is Just For a College Project</p>
            <p>Contact Person: mrizkynoob@gmail.com</p>
        </footer>
        <script src="Script.js"></script>
    </body>
</html>
