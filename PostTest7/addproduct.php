<?php
session_start();
require "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productType = $_POST['product-type'];
    $productName = $_POST['product-name'];
    $productPrice = $_POST['product-price'];
    $productDescription = $_POST['product-description'];
    $productStock = $_POST['product-stock'];

    $uploadDirectory = 'datapic/';

    $imagePath = $uploadDirectory . date("Y-m-d") . $_FILES['product-image']['name'];

    if (move_uploaded_file($_FILES['product-image']['tmp_name'], $imagePath)) {

        $query = "INSERT INTO products (product_type, product_name, product_price, product_description, product_stock, product_image) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssdsss", $productType, $productName, $productPrice, $productDescription, $productStock, $imagePath);
        $stmt->execute();
        $stmt->close();

        header("Location: store.php");
        exit();
    } else {
        echo "File upload failed.";
    }
}
?>

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
        <section class="sectionform">
            <form class="addform" action="" method="post" enctype="multipart/form-data">
                <h2>Add a Product</h2>
                <label for="product-type">Product Type:</label>
                <select name="product-type" id="product-type">
                    <option value="Plushie">Plushie</option>
                    <option value="Doll">Doll</option>
                    <option value="Keychains">Keychains</option>
                    <option value="Others">Others</option>
                </select>
                <label for="product-name">Product Name:</label>
                <input type="text" name="product-name" required>
                <label for="product-price">Price (in dollars):</label>
                <input type="number" name="product-price" required>
                <label for="product-description">Product Description:</label>
                <textarea name="product-description" required></textarea>
                <label for="product-stock">Product Stock:</label>
                <input type="number" name="product-stock" required>
                <label for="product-image">Product Image:</label>
                <input type="file" name="product-image" accept="image/*" required>
                <button type="submit" name="add-product">Add Product</button>
                <button class="kembali"><a href="dashboard.php">Back</a></button>
            </form>
        </section>
        <script src="Script.js"></script>
    </body>
</html>
