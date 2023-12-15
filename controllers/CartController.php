<?php
// app/controllers/CartController.php

class CartController {
    public function showCart() {
        // Logic to retrieve cart data from the model
        $cartModel = new CartModel();
        $cartItems = $cartModel->getCartItems();

        // Load the cart view
        require_once('app/views/cart/cart_view.php');
    }

    public function addToCart($productId, $quantity) {
        // Logic to add a product to the cart
        // This is a simplified example, in a real-world scenario, you would
        // interact with the database to fetch product details and update the cart

        $cartModel = new CartModel();
        $cartModel->addToCart($productId, $quantity);

        // Redirect back to the product page or the cart page
        header("Location: index.php");
        exit();
    }

    public function removeFromCart($productId) {
        // Logic to remove a product from the cart
        // This is a simplified example, in a real-world scenario, you would
        // interact with the database to update the cart

        $cartModel = new CartModel();
        $cartModel->removeFromCart($productId);

        // Redirect back to the cart page
        header("Location: index.php?action=cart");
        exit();
    }

    // Other cart-related methods can be added here
}
?>
