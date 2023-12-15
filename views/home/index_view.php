<?php

// Assuming you have some mechanism to determine the requested action, e.g., from a query parameter
$action = isset($_GET['action']) ? $_GET['action'] : 'default';

// Your application logic to route requests to the appropriate controller and action
switch ($action) {
    case 'home':
        require_once('app/controllers/HomeController.php');
        $homeController = new HomeController();
        $homeController->showHome();
        break;

    case 'menu':
        require_once('app/controllers/MenuController.php');
        $menuController = new MenuController();
        $menuController->showMenu();
        break;

    // Add other cases for different actions or controllers

    default:
        // If the action is not recognized, you might redirect to a default page or show an error
        header("Location: index.php?action=home");
        exit();
}

// You may include common elements such as header, footer, or any other global components here
// Include your HTML structure or layout

?>
