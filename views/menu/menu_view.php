<!-- app/views/menu/menu_view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <!-- Add your stylesheets and scripts here -->
</head>
<body>
    <h1>Menu</h1>
    
    <?php if (empty($menuItems)): ?>
        <p>No items available on the menu.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($menuItems as $item): ?>
                <li>
                    <?php echo $item['name']; ?> - $<?php echo $item['price']; ?>
                    <!-- Display more item details or a link to add to the cart -->
                    <a href="index.php?action=addToCart&productId=<?php echo $item['id']; ?>">Add to Cart</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <!-- Add more HTML content as needed -->
</body>
</html>
