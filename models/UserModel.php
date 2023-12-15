<?php

class UserModel {
    private $users = [];  // Simulating storage for users

    // Method to save a new user
    public function saveUser($userData) {
        // Add the new user to the list
        $this->users[] = $userData;
    }

    public function getUserById($userId) {
        // Placeholder method to retrieve a user by ID
        // In a real-world scenario, you would fetch user data from the database
        return isset($this->users[$userId]) ? $this->users[$userId] : null;
    }

    public function updateUser($userId, $newUserData) {
        // Placeholder method to update user data
        // In a real-world scenario, you would update user data in the database
        if (isset($this->users[$userId])) {
            $this->users[$userId] = array_merge($this->users[$userId], $newUserData);
            return true; // Update successful
        }
        return false; // User not found
    }
    
    // Method to authenticate a user (for simplicity, using a basic check)
    public function authenticateUser($userData) {
        // Simulate user authentication
        foreach ($this->users as $user) {
            if ($user['username'] === $userData['username'] && $user['password'] === $userData['password']) {
                return $user;
            }
        }

        return null;
    }
}
