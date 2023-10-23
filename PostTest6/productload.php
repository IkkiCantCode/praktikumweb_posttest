<?php
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
