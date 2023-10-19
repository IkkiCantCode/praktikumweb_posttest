<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save-edit'])) {
    require "connection.php";

    $productID = $_POST['id'];
    $productType = $_POST['product-type'];
    $productName = $_POST['product-name'];
    $productPrice = $_POST['product-price'];
    $productStock = $_POST['product-stock'];

    $newImagePath = $_POST['current-image']; 

    if (!empty($_FILES['new-product-image']['name'])) {
        $uploadDirectory = 'datapic/';
        $newImageName = basename($_FILES['new-product-image']['name']);
        $newImagePath = $uploadDirectory . $newImageName;

        if (move_uploaded_file($_FILES['new-product-image']['tmp_name'], $newImagePath)) {
            
        } else {
        
        }
    }

    $query = "UPDATE products SET product_type = ?, product_name = ?, product_price = ?, product_stock = ?, product_image = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssdsss", $productType, $productName, $productPrice, $productStock, $newImagePath, $productID);
    $stmt->execute();
    $stmt->close();

    header("Location: dashboard.php");
    exit();
} else {
   
}
?>
