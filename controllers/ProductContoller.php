<?php
// app/controllers/ProductController.php

class ProductController {
    public function showProduct($productId) {
        // Logic to retrieve data for the product page
        $productModel = new ProductModel();
        $product = $productModel->getProductById($productId);

        // Load the product view
        require_once('app/views/product/product_view.php');
    }

    // Other product-related methods can be added here
}
?>
