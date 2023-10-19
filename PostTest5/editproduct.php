<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Add Product</title>
        <link rel="stylesheet" href="store.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body class="light-mode">
        <nav class="navbar-add">
            <div class="logo">
                <a href="index.php"><img src="pokedolllogo.png" alt="#"></a>
            </div>
        </nav>
        <section class="editing">
            <div class="editing-form">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit-product'])) {
                require "connection.php";

                $productID = $_POST['id'];
                $query = "SELECT * FROM products WHERE id = $productID";
                $result = $conn->query($query);

                if ($row = $result->fetch_assoc()) {
                    $productimage = $row ['product_image'];
                    echo '<form action="saveedit.php" method="post" enctype="multipart/form-data">';
                    echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                    echo '<label for="product-type">Product Type:</label>';
                    echo '<select name="product-type" id="product-type">';
                    echo '<option value="Plushie">Plushie</option>';
                    echo '<option value="Doll">Doll</option>';
                    echo '<option value="Keychains">Keychains</option>';
                    echo '<option value="Others">Others</option>';
                    echo '</select>';
                    echo 'Product Name: <input type="text" name="product-name" value="' . $row['product_name'] . '"><br>';
                    echo 'Price: <input type="text" name="product-price" value="' . $row['product_price'] . '"><br>';
                    echo 'In Stock: <input type="text" name="product-stock" value="' . $row['product_stock'] . '"><br>';
                    echo 'Current Image: <img src=\'' . $productimage . '\'><br>';
                    echo 'New Image (optional): <input type="file" name="new-product-image" accept="image/*"><br>';
                    echo '<button type="submit" name="save-edit">Save Edit</button>';
                    echo '</form>';
                }
            } else {

            }
            ?>
            </div>
        </section>
        <script src="Script.js"></script>
    </body>