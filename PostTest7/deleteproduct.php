<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete-product'])) {
    require "connection.php";

    $productID = $_POST['id'];
    $query = "DELETE FROM products WHERE id = $productID";
    $conn->query($query);

    header("Location: dashboard.php");
    exit();
} else {

}
?>
