use App\Models\HomeModel;
<?php
// app/controllers/HomeController.php

class HomeController {
    public function showHome() {
        // Logic to retrieve data for the home page
        $homeModel = new HomeModel();
        $featuredProducts = $homeModel->getFeaturedProducts();

        // Load the home view
        require_once('app/views/home/home_view.php');
    }

    // Other home-related methods can be added here
}
?>
