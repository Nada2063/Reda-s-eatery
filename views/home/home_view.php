<!-- app/views/home/home_view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Add your stylesheets and scripts here -->
</head>
<body>
    <h1>Welcome to Our Website!</h1>
    
    <h2>Featured Products</h2>
    <?php if (empty($featuredProducts)): ?>
        <p>No featured products available.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($featuredProducts as $product): ?>
                <li>
                    <?php echo $product['name']; ?> - $<?php echo $product['price']; ?>
                    <!-- Display more product details or a link to view the product -->
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <!-- Add more HTML content as needed -->
</body>
</html>
