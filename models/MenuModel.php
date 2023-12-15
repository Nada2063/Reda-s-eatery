<?php
// app/models/MenuModel.php

class MenuModel {
    // Placeholder for storing menu items (in-memory, not in a database)
    private $menuItems = [
        ['id' => 1, 'name' => 'Item A', 'price' => 9.99],
        ['id' => 2, 'name' => 'Item B', 'price' => 14.99],
        ['id' => 3, 'name' => 'Item C', 'price' => 19.99],
        // ... more items
    ];

    public function getMenuItems() {
        // Placeholder method to retrieve menu items
        // In a real-world scenario, you would fetch menu items from the database
        return $this->menuItems;
    }

    // Other menu-related methods can be added here
}
?>
