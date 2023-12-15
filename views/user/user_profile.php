<!-- app/views/user/user_profile.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Add your stylesheets and scripts here -->
</head>
<body>
    <?php if ($user): ?>
        <h1>User Profile: <?php echo $user['full_name']; ?></h1>
        <p>Username: <?php echo $user['username']; ?></p>
        <p>Email: <?php echo $user['email']; ?></p>

        <!-- Add more user details or actions as needed -->

        <h2>Edit Profile</h2>
        <form action="index.php?action=updateProfile" method="post">
            <!-- Add form fields for updating user profile -->
            <label for="newUsername">New Username:</label>
            <input type="text" name="newUsername" value="<?php echo $user['username']; ?>" required><br>

            <label for="newEmail">New Email:</label>
            <input type="email" name="newEmail" value="<?php echo $user['email']; ?>" required><br>

            <button type="submit">Update Profile</button>
        </form>

    <?php else: ?>
        <p>User not found.</p>
    <?php endif; ?>

    <!-- Add more HTML content as needed -->
</body>
</html>
