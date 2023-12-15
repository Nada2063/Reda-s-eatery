<!-- app/views/auth/signin_view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- Add your stylesheets and scripts here -->
</head>
<body>
    <h1>Sign In</h1>
    
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="index.php?action=signin" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Sign In</button>
    </form>

    <p>Don't have an account? <a href="index.php?action=signup">Sign Up</a></p>
</body>
</html>
