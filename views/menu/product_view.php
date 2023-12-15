<!-- app/views/product/product_view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <!-- Add your stylesheets and scripts here -->
</head>
<body>
    <?php if ($product): ?>
        <h1><?php echo $product['name']; ?></h1>
        <p>Price: $<?php echo $product['price']; ?></p>
        <p>Description: <?php echo $product['description']; ?></p>

        <!-- Add more product details or actions as needed -->

        <p><a href="index.php?action=addToCart&productId=<?php echo $product['id']; ?>">Add to Cart</a></p>
    <?php else: ?>
        <p>Product not found.</p>
    <?php endif; ?>

    <!-- Add more HTML content as needed -->
</body>
</html>
