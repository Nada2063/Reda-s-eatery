<?php
// app/controllers/AdminController.php

class AdminController {
    public function showDashboard() {
        // Logic to retrieve data for the admin dashboard
        $data = array('pageTitle' => 'Admin Dashboard', 'content' => 'Welcome to the admin dashboard.');

        // Load the view
        require_once('app/views/admin/admin_dashboard.php');
    }

    public function showProfile() {
        // Logic to retrieve admin profile data
        $data = array('pageTitle' => 'Admin Profile', 'content' => 'View and manage your admin profile.');

        // Load the view
        require_once('app/views/admin/admin_profile.php');
    }
    
    // Other admin-related methods can be added here
}
?>
