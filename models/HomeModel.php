<?php
// app/models/HomeModel.php

class HomeModel {
    // Placeholder for storing featured products (in-memory, not in a database)
    private $featuredProducts = [
        ['id' => 1, 'name' => 'Product A', 'price' => 19.99],
        ['id' => 2, 'name' => 'Product B', 'price' => 29.99],
        ['id' => 3, 'name' => 'Product C', 'price' => 39.99],
    ];

    public function getFeaturedProducts() {
        // Placeholder method to retrieve featured products
        // In a real-world scenario, you would fetch featured products from the database
        return $this->featuredProducts;
    }

    // Other home-related methods can be added here
}
?>
