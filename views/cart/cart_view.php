<!-- app/views/cart/cart_view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Add your stylesheets and scripts here -->
</head>
<body>
    <h1>Shopping Cart</h1>
    
    <?php if (empty($cartItems)): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($cartItems as $productId => $item): ?>
                <li>
                    Product ID: <?php echo $productId; ?><br>
                    Quantity: <?php echo $item['quantity']; ?><br>
                    <!-- Display more product details as needed -->
                    <a href="index.php?action=removeFromCart&productId=<?php echo $productId; ?>">Remove from Cart</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <!-- Add more HTML content as needed -->
</body>
</html>
