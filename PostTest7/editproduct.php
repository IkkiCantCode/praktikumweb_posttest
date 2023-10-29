<?php
session_start();
require "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save-edit'])) {
    require "connection.php";

    $productID = $_POST['id'];
    $productType = $_POST['product-type'];
    $productName = $_POST['product-name'];
    $productPrice = $_POST['product-price'];
    $productStock = $_POST['product-stock'];
    $productDescription = $_POST['product-description'];

    $newImagePath = $_POST['current-image']; 

    if (!empty($_FILES['new-product-image']['name'])) {
        $uploadDirectory = 'datapic/';
        $newImageName = basename($_FILES['new-product-image']['name']);
        $newImagePath = $uploadDirectory . date("Y-m-d") . $newImageName;

        if (move_uploaded_file($_FILES['new-product-image']['tmp_name'], $newImagePath)) {
            
        } else {
        
        }
    }

    $query = "UPDATE products SET product_type = ?, product_name = ?, product_price = ?, product_stock = ?, product_description = ?, product_image = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssdssss", $productType, $productName, $productPrice, $productStock, $productDescription, $newImagePath, $productID);
    $stmt->execute();
    $stmt->close();

    header("Location: dashboard.php");
    exit();
} else {
   
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Edit Product</title>
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
            <h2>Edit Product</h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit-product'])) {
                require "connection.php";

                $productID = $_POST['id'];
                $query = "SELECT * FROM products WHERE id = $productID";
                $result = $conn->query($query);

                if ($row = $result->fetch_assoc()) {
                    $productimage = $row ['product_image'];
                    echo '<form action="" method="post" enctype="multipart/form-data">';
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
                    echo 'Product Description: <input type="text" name="product-description" value="' . $row['product_description'] . '"><br>';
                    echo 'Current Image: <img src=\'' . $productimage . '\'><br>';
                    echo 'New Image (optional): <input type="file" name="new-product-image" accept="image/*"><br>';
                    echo '<button type="submit" name="save-edit">Save Edit</button>';
                    echo '<button class="kembali"> <a href="dashboard.php">Back</a></button> ';
                    echo '</form>';
                }
            } else {

            }
            ?>
            </div>
        </section>
        <script src="Script.js"></script>
    </body>