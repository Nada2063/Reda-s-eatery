<?php
// app/models/AdminModel.php

class AdminModel {
    // Methods for interacting with the database related to admin data

    public function getAdminDashboardData() {
        // Sample method to retrieve admin dashboard data from the database
        // You would typically query the database here
        return array('totalUsers' => 100, 'totalProducts' => 50);
    }

    public function getAdminProfileData() {
        // Sample method to retrieve admin profile data from the database
        // You would typically query the database here
        return array('adminName' => 'John Doe', 'adminEmail' => 'john.doe@example.com');
    }
}
?>
