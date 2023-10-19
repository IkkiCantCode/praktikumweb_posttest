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
            <form class="addform" action="productload.php" method="post" enctype="multipart/form-data">
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
